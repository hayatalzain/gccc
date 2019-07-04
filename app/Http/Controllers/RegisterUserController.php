<?php

namespace App\Http\Controllers;

use App\User;
use Response;
use Session;
use File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class RegisterUserController extends Controller
{

    public function showRegistrationForm(){

       return view('auth.register');
    }

    public function create(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
      $items=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return view('auth.register',compact('items'));
    }

    public function show(Request $request){
        $items = User::all();
        return view('user.showUsers',compact('items'));

    }

}
