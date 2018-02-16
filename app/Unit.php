<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $fillable = ['number','size','price','floor','img','rooms','extra','user_id','building_id'];
    
    public function building()
    {
        return $this->belongsTo('App\Building','building_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
