<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function storeuser(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);



        //dd($req->all());

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();

        //dd($user);//return the complete attribute of the User model class
        return redirect()->route('login');

    }
    public function getLogin(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function postLogin(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $user = Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);//login the user

        if($user===true){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withError();
        }

        
    }
}
