<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\manager_module\Client;
use App\Models\manager_module\Call;

class clientsController extends Controller
{
    public function index(Request $req){
        $clients = Client::all();
        return view('manager_module.clients.index')->with('clients', $clients);
    }

    public function showClient(Request $req, $id){
        $client = Client::find($id);
        return view('manager_module.clients.profile')->with('client', $client);
    }

    public function showClientCall(Request $req, $id){
        //DB::enableQueryLog(); // Enable query log
        $client = Client::find($id);
        $calls = Call::where('manager_id',$req->session()->get('user_id'))->get();
        //dd(DB::getQueryLog()); // Show results of log
        return view('manager_module.clients.calls')->with('client', $client)->with('calls', $calls);
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
    public function showClientProfileEdit(Request $req, $id){
        $client = Client::find($id);
        return view('manager_module.clients.profile_edit')->with('client', $client);
    }
    public function deleteClientProfile(Request $req, $id){
        $client = Client::find($id);
        $client->delete();
        return $this->index($req);
    }
}