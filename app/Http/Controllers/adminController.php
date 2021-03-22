<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getLogin() {
        return view('login_admin');
    }

    // public function postlogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if ($request['username'] == 'kontol') {
    //         if ($request['password'] == '12345'){
    //             return "KONTOL";
    //         }
    //         else {
    //             return "password salah";
    //         }
    //     }
    //     else {
    //         return "username salah";
    //     }
    // }

    public function getDashboard()
    {
        return view('admin/index');
    }
}
