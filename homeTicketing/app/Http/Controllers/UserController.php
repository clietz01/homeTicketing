<?php

namespace App\Http\Controllers;

use Illuminate\Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    //

    public function showLogin(){

        return Inertia::render('login');
    }

    public function showAccountCreation(){

        return Inertia::render('register');
        
    }

    protected function createUser(Request $request){

        //account creation at signup screen

        //validate form fields
        $request->validate([
            'name' => 'required',
            'password' => 'required|string|min:8|max:255',
            'email' => 'required|string'
        ]);

        $data = $request->input()->all(); //get data from form
        $newuser = User::create([         //create user from User model
            'name' => $data->name,
            'password' => $data->password,
            'email' => $data->email
        ]);

        $newuser->save(); //save user into database

        return view('profile',
    
        ['name' => $newuser->name,]
    );

    }


    public function login(Request $request){



        $loginCredentials = $request->validate([ //get data from form
            'name' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($loginCredentials)){ //user data matches row in database?
            $request->session()->regenerate();

            return redirect()->route('profile');
        }

        return back()->withErrors([

            'name' => 'credentials do not match our records.'
        ])->onlyInput('name');


    }


    public function showProfile(){
        $user = Auth::user();

        return view('profilePage', [
            'name' => $user->name
        ]);
    }
}
