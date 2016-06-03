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
}
