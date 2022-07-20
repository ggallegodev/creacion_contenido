<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $table='seasons';
    protected $primaryKey = 'id';

    public function tvshows(){
        return $this->belongsTo('App\Models\Tvshow','id_tvshow','id');
    }

    public function episodes(){
        return $this->hasMany('App\Models\Episode','id_season','id');        
    }
}
