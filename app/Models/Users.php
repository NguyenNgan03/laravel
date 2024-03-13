<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUser(){
        $users = DB::select('SELECT * from users ORDER BY create_at DESC');
        return $users;
    }
    public function addUser($data){
        Db::insert('INSERT INTO users (fullname,email,create_at) value (?,?,?)',$data);
    }
}
