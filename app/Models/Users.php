<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUser($filter = [])
    {
        // $users = DB::select('SELECT * from users ORDER BY create_at DESC');
        $users = DB::table($this->table)
        ->select('users.*','groups.name as group_name')
        ->join('groups','users.group_id','=','groups.id')
        ->orderBy('users.create_at','DESC');
        if (!empty($filter)){
            $users = $users->where($filter);
        }
        $users = $users->get();
        return $users;
    }
    public function addUser($data)
    {
        Db::insert('INSERT INTO users (fullname,email,create_at) value (?,?,?)', $data);
    }
    public function getDetial($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }
    public function updateUser($data, $id)
    {
        $data = array_merge($data, [$id]);
        return DB::update('UPDATE ' . $this->table . ' SET fullname =?,email =?, update_at= ? where id=?', $data);
    }
    public function deleteUser($id)
    {
        return  DB::delete("DELETE FROM $this->table WHERE id=? ", [$id]);
    }
}
