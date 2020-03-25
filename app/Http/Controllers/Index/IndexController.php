<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QRcode;

class IndexController extends Controller
{
    //首页
    public function index(){
        return view('index.index');
    }
    //微信二维码
    public function wxre(){
      $url =  storage_path('app/public/phpqrcode.php');
      include($url);
      $obj = new QRcode();
      $uid=uniqid();
      $url_s="http://read.com/imag?uid=".$uid;
      $obj->png($url_s,storage_path('app/public/1.png')); 
    }

    public function imag(){
        $uid=input('uid');
        echo $uid;
    }
}
