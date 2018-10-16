<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/8/29
 * Time: 9:54
 */

namespace app\admin\controller;


use app\admin\model\EnterpriseBank;
use app\admin\model\EnterpriseBusiness;
use app\admin\model\EnterpriseContact;
use app\admin\model\EnterpriseEntryInfo;
use app\admin\model\EnterpriseList;
use think\Db;

/**
 * Class Enterprise
 * @package app\admin\controller
 * 企业管理控制器
 */
class Enterprise extends Base
{
    /**
     * @return string
     * 园区入驻企业信息总览
     */
    public function index()
    {
        return "企业总览";
    }

    /**
     *企业列表
     */
    public function enterprise_list()
    {
        $key = input('key');
        $opentype_check = input('opentype_check', '');
        $where = array();
        if ($opentype_check !== '') {
            $where['enterprise_list_open'] = $opentype_check;
        }

        $enterprise_list = \db('EnterpriseList el')
            ->join('EnterpriseEntryInfo eei', 'el.id=eei.enterprise_id')
            ->where($where)
            ->where('enterprise_list_name', 'like', "%" . $key . "%")
            ->where('is_delete', 'neq', 1)
            ->order('enterprise_list_addtime desc')
            ->paginate(config('paginate.list_rows'), false, ['query' => get_query()]);
        $show = $enterprise_list->render();
        $show = preg_replace("(<a[^>]*page[=|/](\d+).+?>(.+?)<\/a>)", "<a href='javascript:ajax_page($1);'>$2</a>", $show);
        $this->assign('opentype_check', $opentype_check);
        $this->assign('enterprise_list', $enterprise_list);
        $this->assign('page', $show);
        $this->assign('val', $key);
        if (request()->isAjax()) {
            return $this->fetch('ajax_enterprise_list');
        } else {
            return $this->fetch();
        }
        return $this->fetch();
    }

    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 企业详情
     */
    public function enterprise_info()
    {
        $id = \input('id');
        //基本信息
        $basic_info = Db::name('EnterpriseList')->where('id', $id)->find();
        if (empty($bank_info))
            $bank_info = [];
        //业务信息
        $business_info = Db::name('EnterpriseBusiness')->where('enterprise_id', $id)->find();
        if (empty($business_info))
            $business_info = [];
        //联系信息
        $contact_info = Db::name('EnterpriseContact')->where('enterprise_id', $id)->find();
        if (empty($contact_info))
            $contact_info = [];
        //银行信息
        $bank_info = Db::name('EnterpriseBank')->where('enterprise_id', $id)->find();
        if (empty($bank_info))
            $bank_info = [];
        //入驻信息
        $entry_info = Db::name('EnterpriseEntryInfo')->where('enterprise_id', $id)->find();
        if (empty($entry_info))
            $entry_info = [];

        $info = \array_merge($basic_info, $business_info, $contact_info, $bank_info, $entry_info);
        $this->assign('info', $info);
        return $this->fetch();
    }

    /**
     *添加企业的页面（包括基本信息，经济信息，合同信息等，用标检切换展示）
     */
    public function enterprise_add()
    {
        $building = Db::name('ParkBuilding')->where('status', 'eq', 1)->select();
        $room_id = \input('room_id', '');
        $phase = \input('phase', '');

        $this->assign('building', $building);
        $this->assign('room', $room_id);
        $this->assign('phase', $phase);

        return \view();
    }

    /**
     *执行添加操作
     * 1,提交的数据中如果没有表单最后一项:confirmer,说明数据没有提交完全则不进行添加操作.
     * 2,confirmer数据存在则说明入库完成,返回成功提示.
     * 因为提交页面写法的原因,也是因为没时间慢慢写数据验证和数据库操作,所以采取了这种做法.有时间重写.
     */
    public function enterprise_runadd()
    {
        $enterprise_info = \input();
        if (!\request()->isPost()) {
            $this->error('提交方式不正确');
        } else {
            $modleA = new EnterpriseList();
            $modelB = new EnterpriseBusiness();
            $modleC = new EnterpriseContact();
            $modelD = new EnterpriseBank();
            $modelE = new EnterpriseEntryInfo();

            if ($enterprise_info['confirmer'] != '') {
                //logo图片
                $img_url = '';
                $file = request()->file('file0');
                if (!empty($file)) {
                    if (config('storage.storage_open')) {
                        //七牛
                        $upload = \Qiniu::instance();
                        $info = $upload->upload();
                        $error = $upload->getError();
                        if ($info) {
                            $img_url = config('storage.domain') . $info[0]['key'];
                        } else {
                            $this->error($error);//否则就是上传错误，显示错误原因
                        }
                    } else {
                        //本地
                        $validate = config('upload_validate');
                        $info = $file->validate($validate)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                        if ($info) {
                            $img_url = config('upload_path') . '/' . date('Y-m-d') . '/' . $info->getFilename();
                            //写入数据库
                            $data['uptime'] = time();
                            $data['filesize'] = $info->getSize();
                            $data['path'] = $img_url;
                            Db::name('plug_files')->insert($data);
                        } else {
                            $this->error($file->getError());//否则就是上传错误，显示错误原因
                        }
                    }
                    $enterprise_info['enterprise_list_logo'] = $img_url;
                }

                //营业执照图片
                $file1 = request()->file('file1');
                if (!empty($file1)) {
                    if (config('storage.storage_open')) {
                        //七牛
                        $upload1 = \Qiniu::instance();
                        $info1 = $upload1->upload();
                        $error1 = $upload1->getError();
                        if ($info1) {
                            $img_url1 = config('storage.domain') . $info1[0]['key'];
                        } else {
                            $this->error($error1);//否则就是上传错误，显示错误原因
                        }
                    } else {
                        //本地
                        $validate1 = config('upload_validate');
                        $info1 = $file1->validate($validate1)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                        if ($info1) {
                            $img_url1 = config('upload_path') . '/' . date('Y-m-d') . '/' . $info1->getFilename();
                            //写入数据库
                            $data1['uptime'] = time();
                            $data1['filesize'] = $info1->getSize();
                            $data1['path'] = $img_url1;
                            Db::name('plug_files')->insert($data1);
                        } else {
                            $this->error($file1->getError());//否则就是上传错误，显示错误原因
                        }
                    }
                    $enterprise_info['enterprise_list_license_img'] = $img_url1;
                }

                //租房合同照片
                $file2 = request()->file('file2');
                if (!empty($file2)) {
                    if (config('storage.storage_open')) {
                        //七牛
                        $upload2 = \Qiniu::instance();
                        $info2 = $upload2->upload();
                        $error2 = $upload2->getError();
                        if ($info2) {
                            $img_url2 = config('storage.domain') . $info2[0]['key'];
                        } else {
                            $this->error($error2);//否则就是上传错误，显示错误原因
                        }
                    } else {
                        //本地
                        $validate2 = config('upload_validate');
                        $info2 = $file2->validate($validate2)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                        if ($info2) {
                            $img_url2 = config('upload_path') . '/' . date('Y-m-d') . '/' . $info2->getFilename();
                            //写入数据库
                            $data2['uptime'] = time();
                            $data2['filesize'] = $info2->getSize();
                            $data2['path'] = $img_url2;
                            Db::name('plug_files')->insert($data2);
                        } else {
                            $this->error($file2->getError());//否则就是上传错误，显示错误原因
                        }
                    }
                    $enterprise_info['contract_img'] = $img_url2;
                }
                //企业基本信息写入
                $enterprise_info['enterprise_list_legal_setup_day'] = \strtotime($enterprise_info['enterprise_list_legal_setup_day']);//成立日期转时间戳
                $enterprise_info['enterprise_list_addtime'] = \time();
                //企业码
                $enterprise_info['enterprise_list_code'] = substr(md5(microtime(true)), 0, 6);
                $enterprise_name_count = Db::name('EnterpriseList')
                    ->where('enterprise_list_name', 'eq', $enterprise_info['enterprise_list_name'])
                    ->count();
                if ($enterprise_name_count > 0) {
                    $this->error('企业名已存在');
                }

                //插入企业基本信息表并返回企业id
                $modleA->startTrans();
                $enterprise_id = $modleA->allowField(true)->save($enterprise_info);

                //企业ID
                $enterprise_info['enterprise_id'] = $modleA->id;
                if (empty($enterprise_info['enterprise_id'])) {
                    //list模型事务回滚
                    $modleA->rollback();
                    $this->error('添加失败,企业ID不存在');
                }

                //企业业务信息写入
                $modelB->allowField(true)->save($enterprise_info);
                if (empty($modelB->id)) {
                    $modelB->rollback();
                    $modleA->rollback();
                }
                //企业联系信息写入
                $modleC->allowField(true)->save($enterprise_info);
                if (empty($modleC->id)) {
                    $modleC->rollback();
                    $modelB->rollback();
                    $modleA->rollback();
                }
                //企业银行信息写入
                $modelD->allowField(true)->save($enterprise_info);
                if (empty($modelD->id)) {
                    $modelD->rollback();
                    $modleC->rollback();
                    $modelB->rollback();
                    $modleA->rollback();
                }
                //企业入驻信息写入
                $enterprise_info['signed_day'] = \strtotime($enterprise_info['signed_day']);        //签订日期转时间戳
                $enterprise_info['pay_time'] = \strtotime($enterprise_info['pay_time']);        //支付时间转时间戳

                $modelE->allowField(true)->save($enterprise_info);
                if (empty($modelE->id)) {
                    $modelE->rollback();
                    $modelD->rollback();
                    $modleC->rollback();
                    $modelB->rollback();
                    $modleA->rollback();
                } else {
                    //入库之后找出需要的信息进行相关操作
                    $info = Db::name('EnterpriseEntryInfo')
                        ->where('enterprise_id', $enterprise_id)
                        ->field('confirmer,room,phase')
                        ->find();
                    //将企业的id写入房源表里并改变状态,多房间
                    $room_num = \trim($info['room']);
                    $room_num = \explode('|', $room_num);
                    $field = [
                        'status' => 1,
                        'enterprise_id' => $enterprise_info['enterprise_id'],
                    ];
                    Db::name('ParkRoom')
                        ->where('phase', 'eq', $info['phase'])
                        ->where('room_number', 'in', $room_num)->setField($field);
                    $modelE->commit();
                    $modelD->commit();
                    $modleC->commit();
                    $modelB->commit();
                    $modleA->commit();
                    //添加企业后需要将法人注册为用户
                    $m_data = [
                        'member_list_username' => $enterprise_info['enterprise_list_legal_representative'],
                        'member_list_pwd' => \encrypt_password(\config('default_password'), \config('default_salt')),
                        'member_list_salt' => \config('default_salt'),
                        'member_list_tel' => $enterprise_info['enterprise_list_legal_phone_number'],
                        'member_list_groupid' => '2',       //分配一个会员组:企业主
                        'member_list_open' => '1',        //默认可用
                        'member_list_addtime' => \time(),
                    ];
                    Db::name('MemberList')->insert($m_data);    //插入一个会员
                    $this->success('添加成功');
                }
            }
        }
    }

    /**
     *编辑企业信息的页面
     */
    public function enterprise_edit()
    {
        $id = \input('id');
        //基本信息
        $basic_info = Db::name('EnterpriseList')->where('id', $id)->find();
        //业务信息
        $business_info = Db::name('EnterpriseBusiness')->where('enterprise_id', $id)->find();
        //联系信息
        $contact_info = Db::name('EnterpriseContact')->where('enterprise_id', $id)->find();
        //银行信息
        $bank_info = Db::name('EnterpriseBank')->where('enterprise_id', $id)->find();
        //入驻信息
        $entry_info = Db::name('EnterpriseEntryInfo')->where('enterprise_id', $id)->find();

        $info = $basic_info + $business_info + $contact_info + $bank_info + $entry_info;
        $this->assign('info', $info);
        $building = Db::name('ParkBuilding')->where('status', 'eq', 1)->select();
        $this->assign('building', $building);
        return \view();
    }

    /**
     *执行编辑操作
     * 1,清空原来的房源信息和房源表同步
     * 2,添加修改后的房源信息和房源表同步
     */
    public function enterprise_runedit()
    {
        $data = \input();
        $data['enterprise_list_legal_setup_day'] = \strtotime($data['enterprise_list_legal_setup_day']);//成立日期转时间戳
        $data['signed_day'] = \strtotime($data['signed_day']);        //签订日期转时间戳
        $data['pay_time'] = \strtotime($data['pay_time']);        //支付时间转时间戳
        //logo图片
        $checkpic = input('checkpic');
        $oldcheckpic = input('oldcheckpic');
        $img_url = '';
        if ($checkpic != $oldcheckpic) {
            $file = request()->file('file0');
            if (!empty($file)) {
                if (config('storage.storage_open')) {
                    //七牛
                    $upload = \Qiniu::instance();
                    $info = $upload->upload();
                    $error = $upload->getError();
                    if ($info) {
                        $img_url = config('storage.domain') . $info[0]['key'];
                    } else {
                        $this->error($error);//否则就是上传错误，显示错误原因
                    }
                } else {
                    //本地
                    $validate = config('upload_validate');
                    $info = $file->validate($validate)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                    if ($info) {
                        $img_url = config('upload_path') . '/' . date('Y-m-d') . '/' . $info->getFilename();
                        //写入数据库
                        $datai['uptime'] = time();
                        $datai['filesize'] = $info->getSize();
                        $datai['path'] = $img_url;
                        Db::name('plug_files')->insert($datai);
                    } else {
                        $this->error($file->getError());//否则就是上传错误，显示错误原因
                    }
                }
                $data['enterprise_list_logo'] = $img_url;
            }
        } else {
            //原有图片
            $data['enterprise_list_logo'] = input('oldcheckpicname');
        }

        //营业执照
        $checkpic1 = input('checkpic1');
        $oldcheckpic1 = input('oldcheckpic1');
        $img_url1 = '';
        if ($checkpic1 != $oldcheckpic1) {
            $file1 = request()->file('file1');
            if (!empty($file1)) {
                if (config('storage.storage_open')) {
                    //七牛
                    $upload1 = \Qiniu::instance();
                    $info1 = $upload1->upload();
                    $error1 = $upload1->getError();
                    if ($info1) {
                        $img_url1 = config('storage.domain') . $info1[0]['key'];
                    } else {
                        $this->error($error1);//否则就是上传错误，显示错误原因
                    }
                } else {
                    //本地
                    $validate1 = config('upload_validate');
                    $info1 = $file1->validate($validate1)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                    if ($info1) {
                        $img_url1 = config('upload_path') . '/' . date('Y-m-d') . '/' . $info1->getFilename();
                        //写入数据库
                        $datai1['uptime'] = time();
                        $datai1['filesize'] = $info1->getSize();
                        $datai1['path'] = $img_url1;
                        Db::name('plug_files')->insert($datai1);
                    } else {
                        $this->error($file1->getError());//否则就是上传错误，显示错误原因
                    }
                }
                $data['enterprise_list_license_img'] = $img_url1;
            }
        } else {
            //原有图片
            $data['enterprise_list_license_img'] = input('oldcheckpicname1');
        }

        //租房合同
        $checkpic2 = input('checkpic2');
        $oldcheckpic2 = input('oldcheckpic2');
        $img_url2 = '';
        if ($checkpic2 != $oldcheckpic2) {
            $file2 = request()->file('file2');
            if (!empty($file2)) {
                if (config('storage.storage_open')) {
                    //七牛
                    $upload2 = \Qiniu::instance();
                    $info2 = $upload2->upload();
                    $error2 = $upload2->getError();
                    if ($info2) {
                        $img_url2 = config('storage.domain') . $info2[0]['key'];
                    } else {
                        $this->error($error2);//否则就是上传错误，显示错误原因
                    }
                } else {
                    //本地
                    $validate2 = config('upload_validate');
                    $info2 = $file2->validate($validate2)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                    if ($info2) {
                        $img_url2 = config('upload_path') . '/' . date('Y-m-d') . '/' . $info2->getFilename();
                        //写入数据库
                        $datai2['uptime'] = time();
                        $datai2['filesize'] = $info2->getSize();
                        $datai2['path'] = $img_url2;
                        Db::name('plug_files')->insert($datai2);
                    } else {
                        $this->error($file2->getError());//否则就是上传错误，显示错误原因
                    }
                }
                $data['contract_img'] = $img_url2;
            }
        } else {
            //原有图片
            $data['contract_img'] = input('oldcheckpicname2');
        }

        //更新之前先清空原有的房间信息
        $old_room_num = Db::name('EnterpriseEntryInfo')->where('enterprise_id', 'eq', $data['id'])->value('room');
        $old_room_num = \explode('|', $old_room_num);
        $fields0 = [
            'status' => 0,
            'enterprise_id' => ''
        ];
        Db::name('ParkRoom')->where('room_number', 'in', $old_room_num)->setField($fields0);

        \model('EnterpriseList')->allowField(true)->save($data, ['id' => $data['id']]);
        \model('EnterpriseBusiness')->allowField(true)->save($data, ['enterprise_id' => $data['id']]);
        \model('EnterpriseContact')->allowField(true)->save($data, ['enterprise_id' => $data['id']]);
        \model('EnterpriseBank')->allowField(true)->save($data, ['enterprise_id' => $data['id']]);
        \model('EnterpriseEntryInfo')->allowField(true)->save($data, ['enterprise_id' => $data['id']]);
        //图片怎么也改不了,mmp的直接这么写就好了,不过为什么!!!!!删除runtime后又好了, 先留着吧,万一哪天不好了呢
        //Db::name('EnterpriseEntryInfo')->where('enterprise_id', 'eq', $data['id'])->setField('contract_img', $data['contract_img']);

        //入库之后找出需要的信息进行相关操作
        $info = Db::name('EnterpriseEntryInfo')
            ->where('enterprise_id', $data['id'])
            ->field('confirmer,room,phase')
            ->find();
        //根据企业房间号,需要更改房源的状态,
        $room_num = \trim($info['room']);
        $room_num = \explode('|', $room_num);
        $fields = [
            'status' => 1,
            'enterprise_id' => $data['id']
        ];
        Db::name('ParkRoom')
            ->where('phase', 'eq', $info['phase'])
            ->where('room_number', 'in', $room_num)
            ->setField($fields);
        if (empty($info['confirmer'])) {
            $this->error('修改失败');
        } else {
            $this->success('修改成功');
        }
    }

    /**
     *修改企业状态
     */
    public function enterprise_status()
    {
        $id = input('x');
        $enterprise_model = \db('EnterpriseList');
        $status = $enterprise_model->where(array('id' => $id))->value('enterprise_list_open');//判断当前状态情况
        if ($status == 1) {
            $statedata = array('enterprise_list_open' => 0);
            $enterprise_model->where(array('id' => $id))->setField($statedata);
            $this->success('状态禁止');
        } else {
            $statedata = array('enterprise_list_open' => 1);
            $enterprise_model->where(array('id' => $id))->setField($statedata);
            $this->success('状态开启');
        }
    }

    /**
     *删除企业
     */
    public function enterprise_delete()
    {
        $p = input('p');
        $id = \input('id');
        $rst = \db('EnterpriseList')->where('id', 'eq', $id)->delete();

        if ($rst !== false) {
            $room_id = Db::name('EnterpriseEntryInfo')
                ->where('enterprise_id', 'eq', $id)
                ->value('room');
            $room_id = \explode('|', $room_id);
            //删除企业后,将房源状态改为未租
            Db::name('ParkRoom')->where('room_number', 'in', $room_id)->setField('status', 0);

            //删除企业一并删除其他表中的记录
            Db::name('EnterpriseBank')->where('enterprise_id', 'eq', $id)->delete();
            Db::name('EnterpriseBusiness')->where('enterprise_id', 'eq', $id)->delete();
            Db::name('EnterpriseContact')->where('enterprise_id', 'eq', $id)->delete();
            Db::name('EnterpriseEntryInfo')->where('enterprise_id', 'eq', $id)->delete();
            $this->success('删除成功', url('admin/Enterprise/enterprise_list', array('p' => $p)));
        } else {
            $this->error('删除失败', url('admin/Enterprise/enterprise_list', array('p' => $p)));
        }
    }
}