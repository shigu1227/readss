<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    //主键id
    public $primaryKey='books_id';

    //绑定表名
    protected $table='books';
    //关闭时间戳
    public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
