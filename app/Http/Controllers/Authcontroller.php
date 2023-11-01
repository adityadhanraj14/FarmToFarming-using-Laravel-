<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Farmer;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Authcontroller extends Controller
{
    public function login(){
        return view('Auth.loginregister');
    }
    public function createuser(Request $request){
        
        $request->validate([
            'name'=>'required|string',
            'email'=>'email|required',
            'password'=>'required',
            // 'cnfpswrd'=>'required|same:password'
        ]);
        $user=new User ([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
        ]);
        $user->save();
        echo"data saved succesfully"; 
    }

    public function authenticate(Request $request){   
        $request->validate([
            'email'=>'email|required',
            'password'=>'required',
        ]);
        if(Auth::attempt(array('email'=>$request->get('email'),'password'=>$request->get('password')))){

            return view('Category.category');
            // echo "WELCOME";
            // <h3>{{ Auth::user()->name }} </h3>
            // if(Auth::user()->user_type == 1){
            //     return redirect()->route('dashboard.admin');
            // }
            // else if(Auth::user()->user_type == 2){
            //     return redirect()->route('dashboard.user');
            // }
        }
        else{
            // return view('Auth.loginregister');
            // echo "Invalid email idress or passowrd";
            // return redirect()->route('login')->with('error','Email adress or Password is Wrong');
            // alert("Email adress or Password is Wrong");
            echo '<script> alert("Email adress or Password is Wrong")</script>';
            return view('Auth.loginregister');
            // return redirect()->route('login');
        }
    }
    public function category1(){
        return view('Farmerregisteration.farmer');
    }
    public function farmerregister(Request $request){
        $data=new Farmer([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'address2'=>$request->get('address2'),
            'state'=>$request->get('state'),
            'district'=>$request->get('district'),
            'pincode'=>$request->get('pincode'),
        ]);
        $data->save();
        return view('ClientDashboard.dashboard');
    }
    public function category2(){
        return view('Client.client');
    }
    public function clientregister(Request $request){
        $clientdata=new Client([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'address2'=>$request->get('address2'),
            'state'=>$request->get('state'),
            'district'=>$request->get('district'),
            'pincode'=>$request->get('pincode'),
            'dimmension'=>$request->get('dimmension'),
            'longitude'=>$request->get('longitude'),
            'latitude'=>$request->get('latitude'),
            'soilreport'=>$request->get('soilreport'),
            'BhoomiLandId'=>$request->get('BhoomiLandId'),
        ]);
        $clientdata->save();
        echo "data saved succesfully";
    }
}
