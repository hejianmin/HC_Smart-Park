<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/8/28
 * Time: 14:28
 */

namespace app\api\controller;
use think\Controller;
use think\Request;

/**
 * Class Common
 * @package app\api\controller
 * api模块公共控制器
 */
class Common extends Controller
{
    /**
     * @var string
     * 数据头信息
     */
    public $headers = '';

    /**
     *初始化方法
     */
    public function _initialize()
    {
        //debug模式下不检测sign
        if (!\config('app_debug'))
            $this->checkAuth();
    }

    /**
     *检查每次app请求的数据是否合法
     * 1,有没有sign
     * 2,sign值对不对
     * 3,sign是否过期
     */
    public function checkAuth()
    {
        //获取header信息
        $headers = \request()->header();

        //sign参数校验
        if (empty($headers['sign'])) {
            $this->error('sign缺失', 401);
        } elseif (!$this->checkSign()) {
            $this->error('sign错误', 401);
        } elseif (\time() - $headers['time'] > \config('app_sign_time')) {
            $this->error('sign过期', 401);
        } else {
            $this->headers = $headers;
        }
    }

    /**
     * @return bool
     * 检测sign方法
     */
    function checkSign()
    {
        //获取header信息
        $headers = \request()->header();
        //和前端使用同样的数据和加密方式验证sign是否一致
        $sign = md5('xpwsgg');  //后台进行sign加密运算
        if ($sign === $headers['sign']) {
            return true;
        } else {
            return false;
        }
    }
}