<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $guarded = [''];
    protected $table = "City";
    public $timestamps = false;
    protected $primaryKey = "ID";

    public function State() {
        return $this->belongsTo('App\State', 'State_ID', 'ID');
    }

}
