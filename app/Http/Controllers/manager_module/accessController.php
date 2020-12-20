<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class accessController extends Controller
{
    public function showLoginPage(Request $req){
        return view('manager_module.home.login');
    }

    public function showSignOutPage(Request $req){
        $req->session()->flush();
        return view('manager_module.home.login');
    }

    public function showSignUpPage(Request $req){
        return view('manager_module.home.sign-up');
    }

    public function showForgotPasswordPage(Request $req){
        $req->session()->flush();
        return view('manager_module.home.forgot-password');
    }
}