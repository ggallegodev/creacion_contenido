<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonsController extends Controller
{
    //
    public function byTvshow($id){
        return Season::where('id_tvshow','=',$id)->get();
    }
}
