<?php

namespace App\Http\Controllers;

use App\slider;
use Response;
use Session;
use File;
use Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(){

        $items = slider::all();

        return view('slider.index',compact('items'));
    }

    public function create(Request $request){
        $request->validate([
            'title' =>  'required|max:100',
            'date' =>  'required',
            'image' => 'required|image|mimes:jpeg,png|max:1999',
            'details' =>  'required|max:500',
            'type' =>  'required|',
            'read_more' =>  'required|',
        ]);
        $items = new slider();
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
        $items->date=$request->date;
        $items->title=$request->title;
        $items->details=$request->details;
        $items->type=$request->type;
        $items->read_more=$request->read_more;

        $items->save();
        $r_item= slider::find($items->id);
        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_slider;
        $item = slider::find($id);
        return Response::json(['item'=>$item]);
    }

    public function update(Request $request)
    {
        $id=$request->slider_id;

        $request->validate([
            'title' =>  'required|max:100',
            'date' =>  'required',
            'details' =>  'required|max:500',
            'type' =>  'required',
            'read_more' =>  'required',
        ]);

        $items=slider::find($id);
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

        $items->date=$request->date;
        $items->title=$request->title;
        $items->details=$request->details;
        $items->type=$request->type;
        $items->read_more=$request->read_more;

        $items->save();

        return Response::json(['status' => true,'new_img'=>$filename,'new_details'=>$request->details,'id_new'=>$id,'new_title'=>$items->title,
            'new_date'=>$items->details,'new_type'=>$items->type,'new_read_more'=> $items->read_more]);
    }

    public function destroy(Request $request)
    {
        $id=$request->item_slider;

        $items = slider::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }

}
