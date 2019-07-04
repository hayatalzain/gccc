<?php

namespace App\Http\Controllers;
use App\setting;
use Response;
use Session;
use File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index(){
        $items = setting::all();
        return view('setting.index',compact('items'));
    }

    public function create(Request $request){
//        dd($request->value);
        $request->validate([
            'key' =>  'required|max:100',
            'value' =>  'required|max:100000',
        ]);

        $items = new setting( );
        $items->key=$request->key;
        $items->value=$request->value;

        $items->save();

        $r_item= setting::find($items->id);

        return Response::json(['status' => true,'item'=>$r_item]);
    }

    public function edit(Request $request)
    {
        $id= $request->item_setting;

        $item = setting::find($id);

        return Response::json(['item'=>$item]);
    }


    public function update(Request $request)
    {
//        dd($request->setting_id);
        $id=$request->setting_id;

        $request->validate([
            'key' =>  'required|max:100',
            'value' =>  'required|max:1000',
        ]);

        $items=setting::find($id);
dd($items);
        $items->key=$request->key;
        $items->value=$request->value;

        $items->save();

        return Response::json(['status' => true,'new_key'=>$request->key,'new_value'=>$request->value,'id_new'=>$id]);
    }

    public function destroy(Request $request)
    {
        $id=$request->item_setting;

        $items = setting::find($id) ;

        $items->delete();

        return Response::json(['status' => true,'items'=>$items]);
    }

}
