<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continents extends Model
{
    protected $guarded = [''];
    protected $table = "Continent";
    public $timestamps = false;
    protected $primaryKey = "ID";
    
    public function Country() {
        return $this->hasMany("App\Country", "Continent_ID", "ID");
    }
    public function StateThrough()
    {
        return $this->hasManyThrough('App\Continents', 'App\Country','Continent_ID','ID');
    }
    
     public function photos()
    {
        return $this->morphMany('App\Photo', 'Imageable');
    }

}
