<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class clientsController extends Controller
{
    public function index(Request $req){
        return view('manager_module.clients.index');
    }

    public function showClient(Request $req){
        return view('manager_module.clients.profile');
    }

    public function showClientCall(Request $req){
        return view('manager_module.clients.calls');
    }
    public function showClientAppointment(Request $req){
        return view('manager_module.clients.appointments');
    }
    public function showClientChat(Request $req){
        return view('manager_module.clients.chat');
    }
    public function showClientNote(Request $req){
        return view('manager_module.clients.notes');
    }
    public function showClientProposal(Request $req){
        return view('manager_module.clients.proposals');
    }
    public function showClientProfileEdit(Request $req){
        return view('manager_module.clients.profile_edit');
    }
}