<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUser($filter = [], $keywords = null, $sortBy = null, $perPage = null)
    {
        // $users = DB::select('SELECT * from users ORDER BY create_at DESC');
        $users = DB::table($this->table)
            ->select('users.*', 'groups.name as group_name')
            ->join('groups', 'users.group_id', '=', 'groups.id')
            ->where('trash',0);
        $orderBy = 'users.create_at';
        $orderType = 'desc';
        if (!empty($sortByArr) && is_array($sortBy)) {
            if (!empty($sortByArr['sortBy']) && !empty($sortByArr['sortType'])) {
                $orderBy = trim($sortByArr['sortBy']);
                $orderType = trim($sortByArr['sortType']);
            }
        }
        $users = $users->orderBy( $orderBy, $orderType);
        if (!empty($filter)) {
            $users = $users->where($filter);
        }
        if (!empty($keywords)) {
            $users = $users->where(function ($query) use ($keywords) {
                $query->orWhere('fullname', 'like', '%' . $keywords . '%');
                $query->orWhere('email', 'like', '%' . $keywords . '%');
            });
        }
        if(!empty($perPage)){
            $users = $users->paginate($perPage);
        }
        else {
            $users = $users->get();
        }
       
        return $users;
    }
    public function addUser($data)
    {
       // DB::insert('INSERT INTO users (fullname,email,create_at) value (?,?,?)', $data);
       DB::table($this->table)->insert($data);
    }
    public function getDetial($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }
    public function updateUser($data, $id)
    {
       // $data = array_merge($data, [$id]);
        //return DB::update('UPDATE ' . $this->table . ' SET fullname =?,email =?, update_at= ? where id=?', $data);
        return DB::table($this->table)->where('id',$id)->update($data);
    }
    public function deleteUser($id)
    {
       // return  DB::delete("DELETE FROM $this->table WHERE id=? ", [$id]);
       return DB::table($this->table)->where('id',$id)->delete();
    }
}
