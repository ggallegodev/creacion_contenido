<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    
    protected $table='parts';
    protected $primaryKey = 'id';

    public function episodes(){
        return $this->belongsTo('App\Models\Episode','id_episode','id');
    }


}
