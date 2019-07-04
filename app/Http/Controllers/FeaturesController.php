<?php

namespace App\Http\Controllers;

use App\features;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class FeaturesController extends Controller
{
    public function index(){

        $items = features::all();

        return view('features.index',compact('items'));
    }

    public function create(Request $request){
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png|max:1999',
        ]);

        $items = new features( );
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'image' . '_' . time() . '.' . $ext ;
            $file->storeAs('images', $filename);
            $items->image= $filename;
        } else {
            $filename = 'noimage.png';
        }

        $items->id=$request->id;
        $items->save();
        $r_item= features::find($items->id);
        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_features;
        $item = features::find($id);
        return Response::json(['item'=>$item]);
    }

    public function update(Request $request)
    {
        $id=$request->features_id;

        $items=features::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            File::delete(public_path('storage/images/').$items->image);
            $ext = $file->getClientOriginalExtension();
            $filename = 'image' . '_' . time() . '.' . $ext ;
            $file->storeAs('images', $filename);
            $items->image= $filename;
        } else
        {
            $filename = $items->image;
        }
        $items->save();

        return Response::json(['status' => true,'new_img'=>$filename,'id_new'=>$id]);
    }

    public function destroy(Request $request)
    {
        $id=$request->item_features;

        $items = features::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }

}
