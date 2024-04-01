<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    // Quy ước khóa chính, mặc định laravel sẽ lấy field id làm khóa chính.

    // protected $primarykey = 'id';

    //public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
}
