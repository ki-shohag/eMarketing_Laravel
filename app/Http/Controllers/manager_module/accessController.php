<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\manager_module\Manager;

class accessController extends Controller
{
    public function showLoginPage(Request $req){
        return view('manager_module.home.login');
    }

    public function loginVerification(Request $req){
        $manager = Manager::where('email', $req->email)
        ->where('password', $req->password)
        ->first();

        if(isset($manager['user_name']) ){
            $req->session()->put('user_name', $manager['user_name']);
            return redirect('/manager-dashboard');
        }
        else{
    		$req->session()->flash('msg', 'Invalid Email or Password!');
    		return redirect('/manager/login');
    	}
    }

    public function showSignOutPage(Request $req){
        $req->session()->flush();
        return redirect('/manager/login');
    }

    public function showSignUpPage(Request $req){
        return view('manager_module.home.sign-up');
    }

    public function storeManager(Request $req){

        if ($req->password == $req->confirm_password) {
            $manager = new Manager();
          /*   $manager->full_name = $req->full_name;
            $manager->email = $req->email;
            $manager->phone = $req->phone;
            $manager->address = $req->address;
            $manager->city = $req->city;
            $manager->country = $req->country;
            $manager->website = $req->website;
            $manager->added_by = $req->added_by;
            $manager->adding_date = $req->adding_date;
            $manager->status = $req->status;
            $manager->password = $req->password;
            $manager->billing_city = $req->billing_city;
            $manager->billing_state = $req->billing_state;
            $manager->billing_country = $req->billing_country;
            $manager->billing_zip = $req->billing_zip;
             */
            $manager->full_name = $req->full_name;
            $manager->email = $req->email;
            $manager->phone = $req->phone;
            $manager->dob = $req->dob;
            $manager->address = $req->address;
            $manager->city = $req->city;
            $manager->country = $req->country;
            $manager->company_name = $req->company_name;
            $manager->joining_date = date("Y-m-d");
            $manager->user_name = $req->user_name;
            $manager->password = $req->password;
            $manager->status = $req->status;

            if ($manager->save()) {
                $req->session()->flash('msg', 'Sign Up Complete!\nWant to login?');
                return redirect('/manager/login');
            } else {
                return back();
            }
        } else {
            $req->session()->flash('msg', 'Passwords did not match!');
            return redirect('/manager/signup');
        }
    }

    public function showForgotPasswordPage(Request $req){
        $req->session()->flush();
        return view('manager_module.home.forgot-password');
    }

}