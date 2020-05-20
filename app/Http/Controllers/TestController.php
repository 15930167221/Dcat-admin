<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use EasyWeChat\Factory;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // 测试 微信支付
    public function test (){
        $res = DB::select('select * from sp_plan');
        dump($res);die;
       echo 123;
    }
}
