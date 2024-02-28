<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        // echo  'Khoi dong dashboard';
    // su dung session de check login 

    }
    public function index(){
        echo'<h2>Dashboard</h2>';
    }
}
