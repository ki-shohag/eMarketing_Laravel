<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\manager_module\Manager;
use App\Models\manager_module\Client;
use App\Models\manager_module\Service;

class managersController extends Controller
{
    public function index(Request $req){
        $totalClients = Client::count();
        $activeClients = Client::where('status', 'Active')->count();
        $totalServices = Service::count();
        $availableServices = Service::where('status', 'Available')->orWhere('status', 'available')->count();
        return view('manager_module.home.index')->with('totalClients', $totalClients)
        ->with('totalServices', $totalServices)
        ->with('activeClients', $activeClients)
        ->with('availableServices', $availableServices);        
    }

    public function showProfile(Request $req){
        $manager = Manager::where('user_name', $req->session()->get('user_name'))->first();
        if(isset($manager)){
            return view('manager_module.profile.index')->with('manager', $manager);
        }else{
            return redirect('/manager/login');
        }
    }

    public function showProfileEdit(Request $req, $id){
        $manager = Manager::find($id);
        if(isset($manager)){
            return view('manager_module.profile.edit')->with('manager', $manager);
        }
        else{
            return redirect('/manager/login');
        }
    }

    public function uploadProfilePic(Request $req){
        if($req->hasFile('profile-pic')){
            $file = $req->file('profile-pic');
            /*echo "File Name: ".$file->getClientOriginalName()."<br/>";
        	echo "File Extension: ".$file->getClientOriginalExtension()."<br/>";
            echo "File Size: ".$file->getSize();*/
            
        	if($file->move('uploads/profile-pic/', $req->session()->get('user_id').$file->getClientOriginalExtension())){
                $req.session()->flash('msg', '*Updated Profile Picture successfully!');
                return redirect('/manager/profile');
            }
            else{
                $req.session()->flash('msg', '*Failed to update Profile Picture!');
                return redirect('/manager/profile');
            }
        }
        else{
            $req.session()->flash('msg', '*Failed to update Profile Picture!');
            return redirect('/manager/profile');
        }
    }

    public function updateProfile(Request $req){
        $manager = Manager::find($req->session()->get('user_id'));
        $manager->full_name = $req->full_name;
        $manager->company_name = $req->company_name;
        $manager->phone = $req->phone;
        $manager->dob = $req->dob;
        $manager->address = $req->address;
        $manager->city = $req->city;
        $manager->country = $req->country;
        $manager->country = $req->country;

        if($manager->save()){
            $req.session()->flash('msg', '*Updated manager successfully!');
            return redirect('/manager/profile');
        }
        else{
            $req.session()->flash('msg', '*Failed to updated manager!');
            return redirect('/manager/profile');    
        }
    }
}