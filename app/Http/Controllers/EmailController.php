<?php

namespace App\Http\Controllers;

use App\email;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    public function index(){
        $items = email::all();

        return view('email.index',compact('items'));
    }
    public function destroy(Request $request)
    {
        $id=$request->item_features;

        $items = email::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }
}
