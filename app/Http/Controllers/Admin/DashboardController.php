<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        echo 'Khởi động';
        //return 'Khởi động';
    }
    public function index(){
        return '<h2> Dashboard</h2>';
    }
}
