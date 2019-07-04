<?php

namespace App\Http\Controllers;

use App\sponsors;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class SponsorsController extends Controller
{
    public function index(){

        $items = sponsors::all();

        return view('sponsors.index',compact('items'));
    }

    public function create(Request $request){
        $request->validate([
            'link_image' =>  'required|max:100',
            'image' => 'required|image|mimes:jpeg,png|max:1999',
        ]);
        $items = new sponsors( );
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
        $items->link_image=$request->link_image;
        $items->save();
        $r_item= sponsors::find($items->id);
        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_sponsor;
        $item = sponsors::find($id);
        return Response::json(['item'=>$item]);
    }


    public function update(Request $request)
    {
        $id=$request->spon_id;

        $request->validate([
            'link_image' =>  'required|max:100',
//            'image' => 'required|image|mimes:jpeg,png|max:1999',
        ]);

        $items=sponsors::find($id);
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

        $items->link_image=$request->link_image;

        $items->save();

        return Response::json(['status' => true,'new_img'=>$filename,'new_link_img'=>$request->link_image,'id_new'=>$id]);
    }

    public function destroy(Request $request)
    {
        $id=$request->item_sponsor;

        $items = sponsors::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }

}
