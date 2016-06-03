<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    protected $guarded = [''];
    protected $table = "State";
    public $timestamps = false;
    protected $primaryKey = "ID";

    public function Country() {
        return $this->belongsTo("App\Country", "Country_ID", "ID");
    }

    public function City() {
        return $this->hasMany("App\City", "State_ID", "ID");
    }

}
