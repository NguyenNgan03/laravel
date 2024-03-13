<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

class UserController extends Controller
{
   private $users  ;
   public function __construct()
   {
     $this->users = new Users();
   }
   public function index()
   {
      $title = 'Danh sách người dùng';

      $userList = $this->users->getAllUser();
      return view('client.users.lists', compact('title','userList'));
   }
   public function add(){
      $title = 'Thêm người dùng';

      return view('client.users.add', compact('title'));
   }
   public function postAdd(Request $request){
      $request->validate([
         'fullname' => 'required|min:5',
         'email' => 'required|email|unique:users'
      ],[
         'funllname.required' => 'Họ và tên bắt buộc phải nhập',
         'fullname.min' => 'Họ và tên phải từ :min trở lên',
         'email.required' => 'Email bắt buộc phải nhập',
         'email.email' => 'Email không đúng định dạng của email',
         'email.unique' => 'Email đã tồn tại trong hệ thống'
      ]);
      $dataInsert = [
          $request->fullname,
          $request->email,
          date('Y-m-d H:i:s')
      ];
      $this->users->addUser( $dataInsert);
      return redirect()->route('users.index')->with('msg', 'thêm người dùng thành công');
   }
}
