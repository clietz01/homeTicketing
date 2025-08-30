<?php

namespace App\Http\Controllers;

use Illuminate\Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    protected function createUser(Request $request){

        //account creation at signup screen

        //validate form fields
        $request->validate([
            'username' => 'required',
            'password' => 'required|string|min:8|max:255',
            'email' => 'required|string'
        ]);

        $data = $request->input()->all(); //get data from form
        $newuser = User::create([         //create user from User model
            'username' => $data->username,
            'password' => $data->password,
            'email' => $data->email
        ]);

        $newuser->save(); //save user into database

        return view('profile',
    
        ['username' => $newuser->name,]
    );

    }


    public function showLogin(){

        return view('login');
    }

    public function showAccountCreation(){

        return view('create_account');
    }

    public function login(Request $request){

        $loginCredentials = $request->validate([ //get data from form
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($loginCredentials)){ //user data matches row in database?
            $request->session()->regenerate();

            return redirect()->route('profile');
        }

        return back()->withErrors([

            'username' => 'No account found with provided username',
            'password' => 'Provided password does not match provided username'
        ]);


    }


    public function showProfile(){
        $user = Auth::user();

        return view('profilePage', [
            'username' => $user->username
        ]);
    }
}
