<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        return view('app_users.user.dashboard');
    }

    public function yourIpcr(){
        return view('app_users.user.youripcr');
    }

    public function profile(){
        return view('app_users.user.profile');
    }

    public function ipcr(){
        return view('app_users.user.ipcr');
    }

}
