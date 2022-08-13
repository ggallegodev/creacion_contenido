<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartsController extends Controller
{
    //
    public function show(){

    }

    public function store(Request $request){
        //$num_parts=((count($request->all())-4)/4);      
        //dd($num_parts);

        $newpart = new Part();
       
        $newpart->id_episode=$request->get('episodes_in');
        $newpart->start_time=$request->get('input_starttime_part1');
        $newpart->end_time=$request->get('input_endtime_part1');
        $newpart->title1=$request->get('input_title1_part1');
        $newpart->title2=$request->get('input_title2_part1');
        $newpart->save();
    }
}
