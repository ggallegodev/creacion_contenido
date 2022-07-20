<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table='episodes';
    protected $primaryKey = 'id';

    public function seasons(){
        return $this->belongsTo('App\Models\Season','id_season','id');
    }

    public function parts(){
        return $this->hasMany('App\Models\Part','id_episode','id');        
    }


}
