<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class managersController extends Controller
{
    public function index(Request $req){
        return view('manager_module.home.index');
    }

    public function showProfile(Request $req){
        return view('manager_module.profile.index');
    }

    public function showProfileEdit(Request $req){
        return view('manager_module.profile.edit');
    }
}