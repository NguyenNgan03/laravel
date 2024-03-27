<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUser()
    {
        $users = DB::select('SELECT * from users ORDER BY create_at DESC');
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
    public function learnQueryBuiler()
    {
        // lấy tất cả bản ghi của table
        $id = 20;
        // $lists = DB::table($this->table)
        //     ->select('fullname', 'email','update_at','create_at')
        // ->where('id',2)
        // ->where(function($query) use ($id){
        //     $query->where('id', '<',$id)->orWhere('id','>',$id);
        //     $query->orWhere('id','>',$id);
        // })
        // ->where('fullname','like','%Vân Thư%')
        //    ->whereBetween('id',[1,4])
        // ->whereIn('id',[1,4])
        // ->whereDate('update','2023-03-02')
        // ->whereMonth('create_at','02')
        // ->whereDay('create_at','18')
        // ->whereColumn('create_at','>','update_at'
        //     ->get();
        //Join 2 bảng lại với nhau
        $lists =  DB::table('users')
            // ->select('users.*', 'groups.name as group_name')
            // ->rightJoin('groups', 'users.group_id', '=', 'groups.id');
            //->orderBy('create_at','desc');
            // ->orderBy('id','desc');
            // ->inRandomOrder();
            // ->select(DB::raw('count(id) as email_count'), 'email')
            // ->groupBy('email')
            // ->having('email_count')
            // ->limit(2)
            // ->offset(1)
            ->take(2)
            ->skip(2)
            ->get();
        $sql = DB::getQueryLog();
        dd($sql);
        // Lấy 1 bản ghi đầu tiên của table lấy thông tin chi tiết
        $detail = DB::table($this->table)->first();
    }
}
