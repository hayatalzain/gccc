<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\slider;
use App\sponsors;
use App\cardthree;
use App\conference;
use App\features;
use App\email;
use Response;
use Session;
use Image;

class HomeController extends Controller
{
    public function home(){
        $items=slider::all();
        $spon=sponsors::all();
        $card=cardthree::all();
        $conf=conference::all();
        $feat=features::all();

        return view('.home.contact',compact('items','dateObject','spon','card','conf','feat'));

    }

    public function about(){


        return view('home.about');

    }
    public function directory(){
        $items = slider::all();
        $spon=sponsors::all();
        $card=cardthree::all();
        $conf=conference::all();
        $feat=features::all();

        return view('home.directory',compact('items','dateObject','spon','card','conf','feat'));

    }
    public function email(Request $request){
        $items = new email();
        $request->validate([
            'email' => 'email|max:255|unique:email,email,'.$items->id,

        ]);

        $items->email=$request->email;
        $items->save();

        return Response::json(['status' => true]);
    }

    public function __construct()
    {
//      $this->middleware('admin');
    }


}
