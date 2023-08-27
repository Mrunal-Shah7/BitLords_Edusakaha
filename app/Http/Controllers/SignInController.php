<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    public function display_sign_up(){
        return view('signup');
    }

    public function display_index(){
        return view('index');
    }

    public function display_sign_in(){
        return view('signin');
    }

    public function store_signup(Request $request){

        $request->validate([

            'name'=>'required',
            'username'=>'required | unique:users',
            'email'=>'required | email | unique:users',
            'password'=>['required',Password::min(8)->mixedCase()]

        ]);

        $user = new user;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
    }

    public function store_sign_in(Request $request){

        $request->validate([

            'username'=>'required',
            'password'=>['required',Password::min(8)->mixedCase()]

        ]);
        $user = user::where('username','=',$request->username)->first();

        if($user->password == $request->password){
            return back()->with('success');

        }
        else{
            return back()->with('fail','Incorrect username or password !');
        }

    }

    public function display_newevent(){
        return view('eventcreate');
    }


    public function store_newevent(Request $request){

        $event = new event;

        $request->title = $event->title;
        $request->venue = $event->venue;
        $request->s_date = $event->start_date;
        $request->e_date = $event->end_date;
        $request->description = $event->description;
        $event->save();



    }




}
