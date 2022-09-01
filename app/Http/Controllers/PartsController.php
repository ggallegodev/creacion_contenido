<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Episode;

class PartsController extends Controller
{
    //
    public function show(){

    }

    public function store(Request $request){
        $id=$request->get('input_nparts');    
        $episode=$request->get('episodes_in');  
        $episodes=Episode::find($episode);
        //dd($episodes);
        $episodes->load('seasons');
        //$episode->seasons->load('tvshows');
        //dd($episode->seasons->tvshows);
        echo ('<br> Episodio: '. $request->get('episodes_in'));

        echo ('<br> num_parts: '. $id);

        //dd($id);
        //echo ('<br> Part '. $request->get('input_part_number_'.$id));
        $parts=Part::where('id_episode',$request->get('episodes_in'))->where('part_number',$id)->get();  
        //echo ('Episodio: '.$request->get('input_part_number_'.$id));           
        echo ('<br> input_starttime_part'.$id. $request->get('input_starttime_part'.$id));
        //var_dump($parts); 
        if ($parts->isEmpty()){
            $partsaved = new Part();
        }
        else{
            foreach ($parts as $part){
                $partsaved=Part::find($part->id);
            }

        }      
        $partsaved->part_number=$id;      
        $partsaved->id_episode=$request->get('episodes_in');
        $partsaved->start_time=$request->get('input_starttime_part_'.$id);
        $partsaved->end_time=$request->get('input_endtime_part_'.$id);
        $partsaved->title1=$request->get('input_title1_part_'.$id);
        $partsaved->title2=$request->get('input_title2_part_'.$id);
        $partsaved->save();

        //return view('menu',compact('tvshows'));
    
    }

    public function byEpisode($id_episode){
        return Part::where('id_episode','=',$id_episode)
                    ->orderBy('part_number','ASC')->get();
    }

}