<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class chatController extends Controller
{
    public function index(Request $req){
        return view('manager_module.chat.index');
    }
}