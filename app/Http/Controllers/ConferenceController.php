<?php

namespace App\Http\Controllers;

use App\conference;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class ConferenceController extends Controller
{
    public function index(){
        $items = conference::all();

        return view('conference.index',compact('items'));
    }

    public function create(Request $request){
        $request->validate([
            'conference' =>  'required|max:50',
            'conference_title' =>  'required|max:100',
            'date' =>  'required',
        ]);
        $items = new conference( );

        $items->id=$request->id;
        $items->conference=$request->conference;
        $items->conference_title=$request->conference_title;
        $items->date=$request->date;
        $items->save();

        $r_item= conference::find($items->id);
        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_conference;
        $item = conference::find($id);
        return Response::json(['item'=>$item]);
    }


    public function update(Request $request)
    {
        $id=$request->conference_id;

        $request->validate([
            'conference' =>  'required|max:50',
            'conference_title' =>  'required|max:100',

        ]);

        $items=conference::find($id);
        $items->conference=$request->conference;
        $items->save();

        return Response::json(['status' => true,'id_new'=>$id]);
    }

    public function destroy(Request $request)
    {
        $id=$request->item_conference;

        $items = conference::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }

}
