<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QRcode;

class IndexController extends Controller
{
    //二维码展示页面
    public function index(){
        return view('index.index');
    }
    //微信二维码
    public function wxre(){
      $url =  storage_path('app/public/phpqrcode.php');
      include($url);
      $obj = new QRcode();
      $uid=uniqid();
      $url_s="http://read.bianaoao.top/imag?uid=".$uid;
      $obj->png($url_s,storage_path('app/public/1.png')); 
    }

    public function imag(){
        $uid=$_GET['uid'];
        $appid='wxb48cca98c04caf2a';
        $uri=urlencode("http://read.bianaoao.top/login");
        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$uri&response_type=code&scope=snsapi_userinfo&state=$uid#wechat_re";
        header('Location:'.$url);
    }
    public function login(){
        echo $_GET['code'];
    }
}
