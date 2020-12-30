<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\manager_module\Client;
use App\Models\manager_module\Manager;
use App\Models\manager_module\Chat;

class chatController extends Controller
{
    public function index(Request $req){
        $clients = Client::all();
        $manager = Manager::find($req->session()->get('user_id'));
        return view('manager_module.chat.index')
        ->with('clients', $clients)
        ->with('manager', $manager);
    }

    public function showClientChat(Request $req, $client_id){
        $clients = Client::all();
        $manager = Manager::find($req->session()->get('user_id'));
        $chat = Chat::orderBy('sent_at', 'DESC')
        ->leftJoin('clients', 'clients.id','=','chat.client_id')
        ->select('clients.full_name', 'chat.body', 'chat.sent_at', 'chat.sent_from')
        ->where('clients.id',$client_id)
        ->get();
        $client = Client::find($client_id);
        $client_name =  $client['full_name'];
        
        if(isset($chat[0])){
            return view('manager_module.chat.chat')
            ->with('clients', $clients)
            ->with('manager', $manager)
            ->with('chat', $chat)
            ->with('client_name', $client_name);
        }
        else{
            //print_r($chat);
            return view('manager_module.chat.chat')
            ->with('clients', $clients)
            ->with('manager', $manager)
            ->with('client_name', $client_name)
            ->with('chat', $chat);
        }
    }

    public function getUser(Request $req){
        $userName = $req->userName;
        $client = Client::where('full_name','LIKE','%'.$req->userName.'%')->get()->first();
        return $client;
    }
}