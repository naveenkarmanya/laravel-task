<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $guarded = [''];
    protected $table = "Country";
    public $timestamps = false;
    protected $primaryKey = "ID";

    public function Continent() {
        return $this->belongsTo("App\Continents", "Continent_ID", "ID");
    }

    public function State() {
        return $this->hasMany("App\State", "Country_ID", "ID");
    }

}
