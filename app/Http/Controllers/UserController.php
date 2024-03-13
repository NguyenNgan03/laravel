<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

class UserController extends Controller
{
   public function index()
   {
      $title = 'Danh sách người dùng';
      $users = DB::select('SELECT * from users ORDER BY create_at DESC');
      return view('client.users.lists', compact('title','users'));
   }
}
