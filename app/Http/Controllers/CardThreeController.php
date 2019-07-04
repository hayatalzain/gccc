<?php

namespace App\Http\Controllers;

use App\cardthree;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class CardThreeController extends Controller
{
    public function index(){

        $items = cardthree::all();

        return view('cardthree.index',compact('items'));
    }

    public function create(Request $request){
        $request->validate([
            'title' =>  'required|max:100',
            'details' =>  'required|max:500',
            'image' => 'required|image|mimes:jpeg,png|max:1999',
        ]);
        $items = new cardthree( );
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
        $items->details=$request->details;
        $items->title=$request->title;
        $items->save();
        $r_item= cardthree::find($items->id);
        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_card;
        $item = cardthree::find($id);
        return Response::json(['item'=>$item]);
    }

    public function update(Request $request)
    {
        $id=$request->card_id;

        $request->validate([
            'title' =>  'required|max:100',
           'details' =>  'required|max:500',
        ]);

        $items=cardthree::find($id);
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
        $items->details=$request->details;
        $items->title=$request->title;
        $items->save();

        return Response::json(['status' => true,'new_img'=>$filename,'new_details'=>$request->details,'id_new'=>$id,'new_title'=>$request->title]);
    }

    public function destroy(Request $request)
{
$id=$request->item_card;
$items = cardthree::find($id) ;
$items->delete();
return Response::json(['status' => true,'items'=>$items]);
}

}
