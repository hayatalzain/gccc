<?php


use App\setting;


function getVal($key){

    $val=setting::where('key',$key)->first();

    if(!empty($val)){
     return $val->value;
    }
    else
        {
        return null;
    }

}
