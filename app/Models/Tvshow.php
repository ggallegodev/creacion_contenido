<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Tvshow extends Model
{
    
    use HasFactory;

    protected $table='tvshows';    
    protected $primaryKey = 'id';

    public function seasons(){
        return $this->hasMany('App\Models\Season','id_tvshow','id');        
    }

}
