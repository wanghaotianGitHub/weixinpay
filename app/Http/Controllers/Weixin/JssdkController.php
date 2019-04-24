<?php
namespace App\Http\Controllers\Weixin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class JssdkController extends Controller
{
    public function jsTest()
    {
        // echo __METHOD__;
//        test();die;
//        echo '<pre>';print_r($_SERVER);echo '</pre>';die;
        //计算签名
        $nonceStr = Str::random(10);
        $ticket = getJsapiTicket();
        $timestamp = time();
        $current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
        echo 'nonceStr: '.$nonceStr;echo '</br>';
        echo 'ticket: '.$ticket;echo '</br>';
        echo '$timestamp: '.$timestamp;echo '</br>';
        echo '$current_url: '.$current_url;echo '</br>';die;
        $string1 = "jsapi_ticket=$ticket&noncestr=$nonceStr&timestamp=$timestamp&url=$current_url";
//        echo $string1;die;
        $sign = sha1($string1);
        $js_config = [
            'appId' => env('WX_APPID'),       //公众号APPID
            'timestamp' => $timestamp,
            'nonceStr' => $nonceStr,                //随机字符串
            'signature' => $sign,                   //签名
        ];

        $data = [
            'jsconfig'  => $js_config
        ];
        return view('weixin.jssdk',$data);
    }
    public function getImg()
    {
        echo '<pre>';print_r($_GET);echo '</pre>';
    }
}