<?php

namespace App\Http\Controllers\clientUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index(Request $req)
    {
        $req->session()->flush();
        return redirect()->route('login.index');
    }
}
