<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/12/29
 * Time: 11:02
 */

namespace app\api\controller\charts;


use app\admin\model\ParkRoom;
use app\api\controller\Common;

/**
 * Class Index14
 * @package app\api\controller\charts
 * 海天教具2号
 */
class Index14 extends Common
{
    public function build_floor(){
        $floor = \input('floor', 1);
        $model = new ParkRoom();
        switch ($floor){
            case 1:
                $return[0] = $model
                    ->where('phase', 17)
                    ->where('floor', $floor)
                    ->select();
                $return['svg'] = <<<EFO
<svg width="650" height="248" viewBox="0 0 1621 620" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
 <g class="layer">
  <g id="svg_1" fill="#000000" transform="translate(0,723) scale(0.10000000149011612,-0.10000000149011612) ">
   <path id="svg_2" d="m1530,3775l0,-1775l5895,0l5895,0l0,1775l0,1775l-5895,0l-5895,0l0,-1775zm4210,0l0,-1715l-2075,0l-2075,0l0,1715l0,1715l2075,0l2075,0l0,-1715zm3400,865l0,-850l-1680,0l-1680,0l0,850l0,850l1680,0l1680,0l0,-850zm1080,-865l0,-1715l-520,0l-520,0l0,1715l0,1715l520,0l520,0l0,-1715zm3040,0l0,-1715l-1500,0l-1500,0l0,1715l0,1715l1500,0l1500,0l0,-1715zm-4120,-870l0,-845l-1680,0l-1680,0l0,845l0,845l1680,0l1680,0l0,-845z"/>
   <path id="svg_3" d="m2645,4128c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_4" d="m2775,4140c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_5" d="m2852,4125c-10,-22 -18,-26 -50,-25c-57,3 -89,-1 -72,-7c8,-4 20,-13 27,-22c9,-13 8,-17 -5,-22c-9,-3 4,-6 29,-5c33,1 42,4 33,11c-35,26 36,53 82,31c39,-18 30,-38 -13,-31c-28,4 -33,3 -18,-4c11,-5 38,-9 60,-9c22,0 32,2 23,5c-10,2 -18,10 -18,18c0,7 8,16 18,20c16,6 16,7 -1,20c-12,8 -14,15 -7,20c17,11 1,25 -28,24c-24,-2 -24,-2 -4,-6c28,-5 28,-14 1,-31c-24,-15 -25,-15 -37,17l-8,23l-12,-27zm98,-31c0,-2 -12,-4 -27,-4c-21,0 -24,3 -14,9c13,8 41,5 41,-5zm-150,-14c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_6" d="m3018,4142c-14,-3 -16,-8 -8,-22c8,-14 4,-21 -15,-34c-14,-9 -25,-24 -24,-34c0,-13 3,-11 9,6c5,12 15,22 21,22c7,0 9,-9 6,-22c-6,-22 -5,-22 8,-4c8,10 12,23 9,27c-3,5 2,9 10,9c10,0 16,-10 17,-27c2,-24 2,-25 6,-5c2,12 10,22 16,22c7,0 4,7 -6,14c-16,12 -16,15 -3,29c14,13 13,15 -7,19c-12,2 -30,2 -39,0zm32,-16c0,-11 -19,-15 -25,-6c-3,5 1,10 9,10c9,0 16,-2 16,-4z"/>
   <path id="svg_7" d="m3243,4133c-10,-16 -13,-16 -22,-3c-9,13 -11,13 -11,-2c0,-10 7,-18 15,-18c20,0 19,-12 -6,-46l-21,-29l25,27c20,22 26,24 31,12c8,-22 8,-22 -11,-26c-10,-2 5,-4 32,-4c28,0 42,2 33,4c-21,4 -21,7 -8,33c10,17 7,19 -22,20c-32,2 -32,2 7,9c38,7 38,7 8,9c-19,0 -33,7 -35,16c-2,13 -5,13 -15,-2zm42,-53c-3,-5 -10,-10 -16,-10c-5,0 -9,5 -9,10c0,6 7,10 16,10c8,0 12,-4 9,-10z"/>
   <path id="svg_8" d="m3475,4139c-23,-5 -25,-7 -8,-8c12,0 27,-9 32,-18c6,-11 11,-13 11,-5c0,7 10,16 22,21c22,8 22,8 -3,12c-13,3 -37,2 -54,-2z"/>
   <path id="svg_9" d="m3621,4143c-1,-7 -13,-13 -28,-14l-28,-1l25,-7c16,-4 26,-16 29,-31l4,-25l6,25c4,14 17,27 31,31l25,7l-27,1c-14,1 -29,7 -31,14c-4,10 -6,10 -6,0z"/>
   <path id="svg_10" d="m3700,4140c-1,-8 -3,-23 -5,-33c-2,-9 0,-29 5,-45l8,-27l2,25c1,14 3,32 4,40c2,8 0,24 -5,35c-5,14 -8,15 -9,5z"/>
   <path id="svg_11" d="m3739,4146c0,0 -3,-16 -5,-33c-4,-27 -2,-33 13,-34c13,-1 11,-3 -7,-9c-21,-7 -22,-8 -5,-9c17,-1 17,-3 5,-11c-9,-6 -10,-10 -3,-10c6,0 15,5 18,10c5,8 11,7 21,-1c8,-6 17,-9 21,-5c3,3 0,6 -8,6c-11,0 -11,2 1,10c12,8 12,10 -5,10c-15,0 -17,2 -6,9c8,5 12,18 8,30c-3,12 0,21 6,21c20,0 -1,12 -27,14c-14,2 -26,3 -27,2zm34,-43c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_12" d="m3818,4106c-2,-35 0,-46 11,-46c11,0 10,-4 -5,-16c-17,-15 -17,-15 8,0c15,9 40,16 56,16c28,0 28,1 23,43c-6,41 -7,42 -47,45l-42,3l-4,-45zm60,27c-10,-2 -26,-2 -35,0c-10,3 -2,5 17,5c19,0 27,-2 18,-5zm0,-20c-10,-2 -26,-2 -35,0c-10,3 -2,5 17,5c19,0 27,-2 18,-5zm0,-20c-10,-2 -26,-2 -35,0c-10,3 -2,5 17,5c19,0 27,-2 18,-5zm0,-20c-10,-2 -26,-2 -35,0c-10,3 -2,5 17,5c19,0 27,-2 18,-5z"/>
   <path id="svg_13" d="m4012,4118c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_14" d="m4120,4143c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_15" d="m4193,4142c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_16" d="m4290,4088c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_17" d="m3098,4133c6,-2 12,-11 12,-18c0,-7 -6,-16 -12,-18c-10,-4 -10,-6 0,-6c14,-1 17,-41 2,-41c-5,0 -10,-5 -10,-11c0,-17 21,1 30,27c13,33 38,31 43,-3l4,-28l2,27c0,16 8,28 19,31c16,4 16,5 0,6c-21,1 -24,27 -5,34c6,3 -13,5 -43,5c-30,0 -49,-2 -42,-5zm62,-18c0,-8 -7,-15 -15,-15c-8,0 -15,7 -15,15c0,8 7,15 15,15c8,0 15,-7 15,-15z"/>
   <path id="svg_18" d="m3330,4090l0,-50l58,2l57,2l-49,3c-47,4 -48,5 -27,19c17,13 25,13 37,3c8,-6 17,-10 19,-7c3,3 -1,11 -9,17c-14,11 -13,16 1,37l15,24l-51,0l-51,0l0,-50zm80,31c0,-18 -21,-23 -38,-9c-15,12 -16,11 -4,-4c8,-9 11,-22 7,-28c-12,-20 -25,-10 -25,20c0,27 3,30 30,30c17,0 30,-4 30,-9z"/>
   <path id="svg_19" d="m3936,4094c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_20" d="m4427,4122c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_21" d="m4479,4123c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_22" d="m4575,4131l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_23" d="m2970,4110c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_24" d="m3460,4110c-8,-5 -10,-10 -5,-10c6,0 17,5 25,10c8,5 11,10 5,10c-5,0 -17,-5 -25,-10z"/>
   <path id="svg_25" d="m3584,4094c-18,-14 -18,-15 4,-4c12,6 22,13 22,15c0,8 -5,6 -26,-11z"/>
   <path id="svg_26" d="m3652,4094c10,-10 20,-16 22,-13c3,3 -5,11 -17,18c-21,13 -21,12 -5,-5z"/>
   <path id="svg_27" d="m3980,4100c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_28" d="m3457,4088c-9,-6 -8,-8 2,-8c11,0 11,-3 0,-17c-10,-11 -10,-14 -1,-9c7,4 12,2 12,-6c0,-10 3,-9 9,2c6,8 7,18 5,22c-3,4 5,8 17,8c22,0 22,0 3,-22c-13,-16 -14,-19 -2,-10c13,10 17,10 21,0c4,-9 6,-10 6,-1c1,7 9,10 19,7c14,-5 14,-4 -2,6c-15,10 -16,14 -5,21c8,5 10,9 4,10c-47,4 -79,3 -88,-3z"/>
   <path id="svg_29" d="m4432,4070l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_30" d="m4540,4077c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_31" d="m2850,4080c0,-6 7,-10 15,-10c8,0 15,2 15,4c0,2 -7,6 -15,10c-8,3 -15,1 -15,-4z"/>
   <path id="svg_32" d="m2616,4065c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_33" d="m3575,4059c-4,-6 -5,-12 -2,-15c2,-3 7,2 10,11c7,17 1,20 -8,4z"/>
   <path id="svg_34" d="m3600,4061c0,-6 4,-13 10,-16c6,-3 7,1 4,9c-7,18 -14,21 -14,7z"/>
   <path id="svg_35" d="m3660,4061c0,-6 4,-13 10,-16c6,-3 7,1 4,9c-7,18 -14,21 -14,7z"/>
   <path id="svg_36" d="m3470,3755c0,-16 6,-25 15,-25c21,0 19,-28 -2,-33c-13,-4 -12,-5 5,-6c32,-1 41,29 14,47c-27,17 -28,29 -4,35c13,4 11,5 -5,6c-18,1 -23,-4 -23,-24z"/>
   <path id="svg_37" d="m3534,3756c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c7,-27 -7,-50 -25,-40c-12,8 -15,49 -4,59c13,13 23,7 29,-19z"/>
   <path id="svg_38" d="m3610,3754c-12,-31 4,-67 28,-62c20,4 29,47 10,49c-7,1 -16,1 -20,0c-18,-3 -6,20 15,29l22,9l-23,0c-15,1 -26,-7 -32,-25zm40,-39c0,-8 -7,-15 -15,-15c-8,0 -15,7 -15,15c0,8 7,15 15,15c8,0 15,-7 15,-15z"/>
   <path id="svg_39" d="m3753,3758c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_40" d="m6645,4738c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_41" d="m6775,4750c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_42" d="m6874,4734c-16,-13 -24,-24 -19,-23c6,1 19,0 30,-1c17,-2 17,-3 -5,-10c-24,-8 -24,-8 -2,-9c12,-1 22,-7 22,-16c0,-16 -16,-21 -22,-6c-1,5 -9,3 -16,-5c-11,-12 -5,-14 40,-13c29,0 48,3 42,5c-7,3 -10,14 -7,24c4,14 0,20 -13,21c-11,1 -7,4 9,8l29,6l-30,22l-29,21l-29,-24zm46,1c11,-13 8,-15 -15,-15c-23,0 -26,2 -15,15c7,8 14,15 15,15c1,0 8,-7 15,-15zm10,-54c0,-6 -4,-13 -10,-16c-5,-3 -10,1 -10,9c0,9 5,16 10,16c6,0 10,-4 10,-9z"/>
   <path id="svg_43" d="m7091,4699c0,-35 3,-57 7,-49c8,17 32,25 32,10c0,-5 16,-10 35,-10l35,0l0,50c0,50 0,50 -32,50c-18,0 -43,3 -55,6c-22,6 -23,4 -22,-57zm28,20c0,13 4,22 7,18c9,-9 -5,-57 -16,-57c-6,0 -9,17 -9,38c1,37 1,37 9,7c7,-27 8,-27 9,-6zm61,6c0,-8 -7,-15 -15,-15c-8,0 -15,7 -15,15c0,8 7,15 15,15c8,0 15,-7 15,-15zm0,-45c0,-11 -7,-20 -15,-20c-8,0 -15,9 -15,20c0,11 7,20 15,20c8,0 15,-9 15,-20z"/>
   <path id="svg_44" d="m7532,4728c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_45" d="m7640,4753c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_46" d="m7713,4752c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,26 -4,29 -32,30l-33,2l30,4c17,3 34,8 38,13c10,9 -45,17 -80,12zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_47" d="m7810,4698c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_48" d="m6995,4740l30,-8l-27,-1c-26,-1 -28,-4 -26,-43l1,-43l4,38c3,29 9,37 24,37c15,0 19,-8 20,-37c2,-31 3,-33 6,-10c5,30 20,36 30,11c3,-9 0,-20 -8,-25c-11,-7 -11,-9 4,-9c13,0 17,9 17,40c0,34 -3,40 -22,41c-19,1 -17,3 7,9c24,6 17,8 -30,8c-47,0 -54,-2 -30,-8zm65,-30c0,-5 -7,-7 -15,-4c-8,4 -15,8 -15,10c0,2 7,4 15,4c8,0 15,-4 15,-10z"/>
   <path id="svg_49" d="m7215,4710c0,-31 3,-39 17,-36c24,3 35,16 15,16c-20,0 -23,16 -4,23c10,4 10,6 0,6c-25,2 -13,21 12,21c21,0 24,-3 16,-18c-10,-20 -3,-72 10,-72c5,0 9,12 9,27c0,26 1,26 16,7c15,-18 15,-18 5,3c-6,12 -16,24 -23,27c-9,3 -7,9 6,20c19,15 17,16 -30,16l-49,0l0,-40z"/>
   <path id="svg_50" d="m7333,4727c-8,-16 -9,-27 -3,-27c6,0 10,-11 10,-25c0,-29 12,-32 31,-7c13,15 12,16 -3,3c-16,-12 -18,-11 -18,4c0,26 33,14 41,-15c7,-24 7,-24 8,-2c1,14 10,26 24,32c22,9 22,9 -3,11c-17,1 -20,3 -7,6c9,2 17,13 17,24c0,15 -7,19 -35,19c-28,0 -35,-4 -35,-19c0,-11 8,-22 18,-24c13,-4 12,-5 -5,-6c-17,-1 -22,5 -25,26l-3,28l-12,-28zm87,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_51" d="m7456,4704c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_52" d="m7947,4732c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_53" d="m7999,4733c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_54" d="m8095,4741l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_55" d="m6739,4709c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_56" d="m7500,4710c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_57" d="m6993,4690c-1,-11 2,-20 7,-20c4,0 7,7 6,15c-3,23 -12,26 -13,5z"/>
   <path id="svg_58" d="m7952,4680l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_59" d="m8060,4687c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_60" d="m6616,4675c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_61" d="m7410,4676c0,-2 7,-9 15,-16c9,-7 15,-8 15,-2c0,5 -7,12 -15,16c-8,3 -15,4 -15,2z"/>
   <path id="svg_62" d="m7243,4383c9,-2 17,-11 17,-18c0,-7 -8,-16 -17,-18c-17,-4 -17,-5 0,-6c25,-2 21,-29 -5,-34c-20,-4 -19,-4 5,-6c30,-1 49,25 27,39c-8,5 -9,10 -2,14c18,11 2,36 -22,35c-16,-1 -17,-2 -3,-6z"/>
   <path id="svg_63" d="m7313,4383c23,-6 21,-32 -5,-60l-21,-23l34,1c25,1 28,3 11,6l-24,5l22,23c27,28 20,55 -12,54c-17,-1 -18,-2 -5,-6z"/>
   <path id="svg_64" d="m7372,4378c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_65" d="m7513,4368c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_66" d="m9576,4137c3,-10 9,-15 12,-12c3,3 0,11 -7,18c-10,9 -11,8 -5,-6z"/>
   <path id="svg_67" d="m9650,4141c0,-5 -12,-12 -27,-14l-28,-4l28,-2c20,-1 27,-6 27,-22c0,-24 -22,-49 -44,-49c-11,0 -16,9 -16,30c0,22 -5,30 -17,30c-14,0 -15,-2 -4,-9c9,-6 11,-18 8,-34l-7,-24l113,-1l112,-1l-3,39c-3,28 -9,40 -21,41c-9,1 -6,4 9,9c26,8 18,12 -25,12c-38,0 -42,-3 -20,-12c17,-7 17,-9 3,-9c-14,-1 -18,-10 -20,-38c-1,-37 -1,-37 -5,-5c-5,39 -19,43 -18,5c0,-21 -5,-29 -21,-31c-18,-3 -20,1 -16,30c3,18 8,35 12,38c4,3 2,11 -6,18c-8,7 -14,8 -14,3zm123,-38c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm7,-17c0,-9 -40,-13 -46,-5c-3,5 6,9 20,9c14,0 26,-2 26,-4zm-7,-33c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_68" d="m9690,4141c0,-6 4,-13 10,-16c6,-3 7,1 4,9c-7,18 -14,21 -14,7z"/>
   <path id="svg_69" d="m9610,4101c0,-6 4,-13 10,-16c6,-3 7,1 4,9c-7,18 -14,21 -14,7z"/>
   <path id="svg_70" d="m9560,3765c-10,-12 -10,-18 0,-30c7,-9 19,-14 27,-11c7,3 13,1 13,-5c0,-5 -10,-14 -22,-19l-23,-9l23,0c28,-1 47,41 32,70c-13,23 -33,25 -50,4zm38,-12c-4,-22 -22,-20 -26,1c-2,10 3,16 13,16c10,0 15,-7 13,-17z"/>
   <path id="svg_71" d="m9634,3767c-12,-32 0,-72 23,-75c43,-6 42,78 -1,86c-9,2 -19,-3 -22,-11zm36,-33c0,-24 -4,-34 -12,-32c-24,8 -22,68 2,68c5,0 10,-16 10,-36z"/>
   <path id="svg_72" d="m9753,3742c-30,-3 -33,-6 -32,-35l1,-32l8,30c6,24 8,26 9,8c2,-34 37,-30 44,5c3,15 5,27 4,27c-1,0 -17,-1 -34,-3z"/>
   <path id="svg_73" d="m10885,4128c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_74" d="m11015,4140c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_75" d="m11135,4141c3,-5 -7,-12 -22,-14l-28,-4l30,-2c29,-3 29,-3 5,-10c-18,-5 -26,-15 -28,-34c-2,-15 1,-27 7,-27c6,0 11,11 11,25c0,41 28,31 33,-12l4,-38l1,38c1,25 7,37 17,37c18,0 20,-36 3,-43c-8,-3 -6,-6 5,-6c12,-1 17,7 17,29c0,24 -4,30 -22,31c-19,1 -17,3 7,9l30,8l-27,1c-16,0 -28,6 -28,11c0,6 -5,10 -11,10c-5,0 -8,-4 -4,-9z"/>
   <path id="svg_76" d="m11355,4139l-30,-7l30,-2c28,-3 29,-3 5,-8l-25,-5l25,-8c24,-7 24,-7 -5,-8c-21,-1 -26,-4 -16,-10c9,-6 10,-11 2,-15c-6,-4 -11,-12 -11,-18c0,-7 6,-6 15,2c8,7 15,9 15,4c0,-5 4,-3 9,5c5,7 15,11 22,9c9,-3 -2,-13 -26,-27c-22,-12 -30,-19 -19,-16c39,10 154,13 154,4c0,-18 17,-9 38,21c15,20 18,28 7,24c-8,-4 -15,-1 -15,5c0,6 6,11 14,11c9,0 12,7 9,20c-4,14 -14,20 -34,20c-37,0 -38,-20 -1,-21l27,-1l-30,-8c-16,-4 -22,-8 -12,-9c11,-1 17,-9 17,-26c0,-14 -4,-25 -10,-25c-5,0 -7,6 -4,14c3,8 1,17 -5,21c-6,3 -9,0 -5,-8c4,-11 -7,-16 -41,-22c-26,-3 -49,-5 -51,-3c-8,9 39,49 51,44c7,-2 16,2 19,10c4,9 2,12 -5,8c-8,-4 -9,1 -5,17c6,21 5,21 -9,-3c-11,-21 -23,-28 -43,-27l-27,1l25,8l25,8l-25,2c-23,2 -23,3 5,9l30,7l-30,5c-16,2 -43,2 -60,-2z"/>
   <path id="svg_77" d="m11584,4131c-5,-9 -8,-33 -6,-53l3,-37l112,1c62,1 100,3 85,5c-34,5 -37,30 -5,36l22,4l-22,2c-28,1 -31,21 -3,21c11,0 20,5 20,10c0,6 -9,10 -20,10c-11,0 -20,6 -20,13c0,9 -3,8 -9,-2c-5,-7 -14,-11 -19,-7c-13,8 -36,-30 -27,-44c3,-6 15,-10 26,-10c10,0 19,-7 19,-15c0,-10 -10,-15 -30,-15c-26,0 -31,5 -37,31c-3,17 -12,33 -19,36c-8,3 -12,9 -9,13c3,4 -8,10 -24,12c-19,3 -32,-1 -37,-11zm39,-8c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5zm-3,-23c0,-5 -7,-10 -15,-10c-8,0 -15,5 -15,10c0,6 7,10 15,10c8,0 15,-4 15,-10zm40,0c0,-5 -7,-10 -15,-10c-8,0 -15,5 -15,10c0,6 7,10 15,10c8,0 15,-4 15,-10zm80,0c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-72,-37c2,-9 -9,-13 -37,-13c-30,0 -41,4 -41,16c0,11 9,14 37,12c20,-2 38,-9 41,-15z"/>
   <path id="svg_78" d="m11831,4135c-1,-15 -3,-17 -10,-7c-6,11 -9,9 -13,-6c-4,-15 -2,-19 8,-15c17,6 18,-9 2,-25c-9,-9 -9,-12 -1,-12c7,0 14,-10 16,-22c4,-20 5,-20 7,5c3,38 4,40 14,56c7,11 10,11 17,0c7,-12 9,-11 10,1c0,10 3,8 9,-5c12,-27 12,-55 1,-55c-5,0 -7,10 -4,23c3,16 2,18 -5,8c-8,-11 -10,-11 -14,0c-3,9 -6,8 -11,-5c-4,-10 -3,-15 3,-11c6,3 10,2 10,-4c0,-5 -6,-11 -12,-14c-7,-2 1,-4 17,-4c35,-1 45,11 45,55c0,28 -3,32 -25,32c-14,0 -25,6 -25,13c0,6 -6,3 -12,-8c-11,-19 -11,-19 -19,0c-7,20 -8,20 -8,0z"/>
   <path id="svg_79" d="m11936,4134c-3,-9 -6,-34 -5,-57c0,-23 3,-36 6,-29c2,6 12,12 21,12c15,0 15,-2 2,-10c-13,-8 -12,-10 3,-10c12,0 17,8 17,29c0,25 -3,28 -22,25c-21,-4 -21,-4 -3,5c11,4 35,6 53,3c19,-3 32,0 32,6c0,5 -10,8 -22,5c-23,-4 -23,-4 -3,13c15,13 16,15 3,11c-9,-3 -19,-1 -22,6c-2,7 -5,4 -5,-7c-1,-15 -4,-16 -16,-6c-10,9 -15,9 -15,1c0,-6 -4,-11 -10,-11c-5,0 -7,7 -4,15c4,8 4,15 1,15c-3,0 -8,-7 -11,-16zm31,-60c-3,-3 -12,-4 -19,-1c-8,3 -5,6 6,6c11,1 17,-2 13,-5z"/>
   <path id="svg_80" d="m12193,4142c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_81" d="m12290,4088c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_82" d="m11230,4130c17,-5 19,-8 8,-9c-14,-1 -18,-10 -18,-41l0,-40l45,0l45,0l0,40c0,37 -2,40 -27,41c-25,2 -24,2 7,9c30,6 26,7 -25,8c-44,0 -53,-2 -35,-8zm70,-30c0,-5 -16,-10 -35,-10c-19,0 -35,5 -35,10c0,6 16,10 35,10c19,0 35,-4 35,-10zm0,-40c0,-5 -16,-10 -35,-10c-19,0 -35,5 -35,10c0,6 16,10 35,10c19,0 35,-4 35,-10z"/>
   <path id="svg_83" d="m12080,4106c0,-19 -3,-43 -6,-53c-5,-15 -4,-15 5,-3c6,8 11,30 11,48c0,17 4,32 8,32c5,0 7,-13 4,-30c-3,-18 0,-30 7,-30c6,0 11,-5 11,-11c0,-5 -4,-8 -9,-4c-5,3 -12,2 -15,-3c-2,-4 4,-9 15,-9c11,-1 19,5 19,15c0,14 1,14 13,-2c11,-15 12,-12 9,23c-3,29 -9,41 -21,42c-9,1 -6,4 9,9c21,7 19,8 -17,9c-42,1 -43,1 -43,-33zm57,-2c-3,-3 -12,-4 -19,-1c-8,3 -5,6 6,6c11,1 17,-2 13,-5zm0,-20c-3,-3 -12,-4 -19,-1c-8,3 -5,6 6,6c11,1 17,-2 13,-5z"/>
   <path id="svg_84" d="m12427,4122c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_85" d="m12479,4123c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_86" d="m12575,4131l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_87" d="m12050,4110c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_88" d="m10979,4099c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_89" d="m12432,4070l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_90" d="m12540,4077c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_91" d="m11445,4080c-4,-6 3,-10 14,-10c25,0 27,6 6,13c-8,4 -17,2 -20,-3z"/>
   <path id="svg_92" d="m11990,4063c0,-18 6,-23 25,-23c14,0 25,4 25,9c0,5 -9,7 -20,4c-11,-3 -20,0 -20,6c0,6 6,11 14,11c8,0 17,4 20,9c3,5 -5,8 -19,7c-19,-1 -25,-7 -25,-23z"/>
   <path id="svg_93" d="m10856,4065c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_94" d="m12053,4065c-3,-9 -3,-18 -1,-21c3,-3 8,4 11,16c6,23 -1,27 -10,5z"/>
   <path id="svg_95" d="m11603,3773c23,-6 21,-32 -5,-60l-21,-23l34,1c25,1 28,3 11,6l-24,5l22,23c27,28 20,55 -12,54c-17,-1 -18,-2 -5,-6z"/>
   <path id="svg_96" d="m11654,3756c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_97" d="m11732,3768c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_98" d="m11873,3758c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_99" d="m6665,3198c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_100" d="m6795,3210c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_101" d="m6881,3212c-5,-2 -7,-10 -4,-18c5,-13 7,-13 14,-2c7,10 9,9 9,-4c0,-10 -7,-18 -17,-18c-26,0 -6,-12 34,-21l38,-8l-37,2c-31,3 -38,0 -38,-15c0,-15 8,-18 46,-18c44,0 46,1 42,25c-3,14 -1,25 4,25c5,0 3,6 -4,14c-9,10 -15,11 -20,2c-5,-7 -8,-5 -8,7c0,9 7,17 17,17c9,0 14,3 10,6c-6,7 -71,11 -86,6zm49,-27c0,-8 -4,-15 -10,-15c-5,0 -10,7 -10,15c0,8 5,15 10,15c6,0 10,-7 10,-15zm8,-62c-10,-2 -26,-2 -35,0c-10,3 -2,5 17,5c19,0 27,-2 18,-5z"/>
   <path id="svg_102" d="m7061,3211c-1,-7 -7,-11 -16,-7c-8,3 -15,1 -15,-4c0,-6 14,-10 30,-10c17,0 30,5 30,11c0,5 -4,8 -9,5c-5,-4 -12,0 -14,6c-4,10 -6,10 -6,-1z"/>
   <path id="svg_103" d="m7139,3212c-21,-2 -27,-8 -25,-28c0,-13 5,-24 10,-24c5,0 2,-8 -5,-17c-8,-9 -9,-14 -3,-10c7,4 15,0 18,-9c3,-9 12,-14 19,-11c6,2 22,1 33,-4c19,-7 21,-5 16,13c-4,16 -2,19 9,14c8,-4 5,0 -5,8c-20,16 -20,16 0,16c17,1 17,3 -6,22c-24,21 -24,21 -2,15c12,-3 22,-2 22,3c0,9 -45,16 -81,12zm38,-58c-3,-3 -12,-4 -19,-1c-8,3 -5,6 6,6c11,1 17,-2 13,-5zm-17,-24c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10zm30,0c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_104" d="m7252,3212c-21,-3 -23,-8 -21,-53c2,-35 6,-46 14,-39c7,6 16,5 24,-3c14,-14 31,5 31,36c0,31 20,18 21,-15l2,-33l6,35c5,28 3,36 -11,38c-10,2 -18,7 -18,12c0,5 8,11 18,13c13,4 11,5 -5,6c-20,1 -23,-4 -23,-38c0,-22 -4,-42 -8,-45c-4,-2 -6,10 -4,29c6,48 0,60 -26,57zm18,-22c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_105" d="m7353,3205c-9,-10 -9,-15 -1,-17c8,-3 7,-11 -2,-27c-7,-15 -8,-21 -1,-17c7,5 11,-1 11,-15c0,-37 10,-15 12,25c1,20 5,36 10,36c5,0 7,-21 4,-47c-3,-47 -3,-48 10,-18c7,17 13,40 14,53c0,43 20,21 20,-23c0,-49 22,-63 35,-22l7,22l8,-25l8,-25l2,25c2,14 4,35 5,47c1,12 -2,27 -6,35c-6,9 -9,5 -9,-12c0,-14 -9,-38 -20,-55l-20,-30l0,49l0,49l-34,-6c-19,-3 -36,-2 -38,3c-2,4 -8,2 -15,-5z"/>
   <path id="svg_106" d="m7541,3213c-1,-6 -9,-14 -18,-16c-17,-4 -17,-5 0,-6c9,0 17,-9 17,-18c0,-15 -2,-16 -10,-3c-15,23 -30,-6 -17,-33c10,-22 67,-34 67,-15c0,5 -4,6 -10,3c-13,-8 -13,11 2,38c10,20 10,21 -5,8c-15,-12 -17,-11 -17,3c0,9 7,16 16,16c8,0 12,5 9,10c-4,6 -10,8 -15,5c-4,-3 -11,1 -13,7c-4,9 -6,9 -6,1zm9,-73c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_107" d="m7672,3188c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_108" d="m7780,3213c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_109" d="m7853,3212c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,26 -3,29 -32,29c-22,0 -28,3 -20,9c7,4 24,6 38,3c13,-2 24,0 24,6c0,11 -51,19 -87,14zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_110" d="m7950,3158c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_111" d="m6995,3167c0,-37 3,-43 18,-39c10,2 17,-1 18,-9c1,-8 5,-3 9,11c7,21 8,22 10,5l1,-20l9,20c8,19 9,19 9,-3c1,-27 24,-25 29,2c3,11 -4,20 -20,24l-23,6l25,7c19,5 13,7 -24,8c-38,1 -47,4 -42,16c3,8 0,15 -7,15c-8,0 -12,-16 -12,-43zm41,-12c-8,-8 -17,-15 -20,-15c-3,0 -6,7 -6,15c0,9 9,15 21,15c18,0 19,-2 5,-15zm51,-27c-3,-8 -6,-5 -6,6c-1,11 2,17 5,13c3,-3 4,-12 1,-19z"/>
   <path id="svg_112" d="m7596,3164c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_113" d="m8087,3192c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_114" d="m8139,3193c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_115" d="m8235,3201l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_116" d="m6759,3169c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_117" d="m7640,3170c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_118" d="m8092,3140l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_119" d="m8200,3147c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_120" d="m6636,3135c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_121" d="m7323,2843c9,-2 17,-11 17,-18c0,-7 -8,-16 -17,-18c-17,-4 -17,-5 0,-6c25,-2 21,-29 -5,-34c-20,-4 -19,-4 5,-6c30,-1 49,25 27,39c-8,5 -9,10 -2,14c18,11 2,36 -22,35c-16,-1 -17,-2 -3,-6z"/>
   <path id="svg_122" d="m7393,2843c23,-6 21,-32 -5,-60l-21,-23l34,1c25,1 28,3 11,6l-24,5l22,23c27,28 20,55 -12,54c-17,-1 -18,-2 -5,-6z"/>
   <path id="svg_123" d="m7452,2838c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_124" d="m7593,2828c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
  </g>
  <path stroke="#000000" class="room" id="room_01" d="m1035.98617,179l280.02768,3.00915l3.98616,325.99086l-287.99999,0l3.98616,-329z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" fill="#e5e5e5"/>
  <path class="room" id="room_02" d="m584,181l322,2l3,155l-327,-1l2,-156z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_03" d="m583,356l327,0l0,154l-325,0l-2,-154z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_04" d="m166,182l398,3l3,324l-403,1l2,-328z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
 </g>
</svg>
EFO;
                return \show(1, 'OK', $return, 200);
                break;

            default:
                return '未知楼层';
                break;
        }
    }
}
