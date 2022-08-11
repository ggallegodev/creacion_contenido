<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;

class EpisodesController extends Controller
{
    //
    public function bySeason($id){
        return Episode::where('id_season','=',$id)->get();
    }

}
