<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
         protected $guarded = [''];
    protected $table = "Staff";
    public $timestamps = false;
    protected $primaryKey = "ID";
    public function Photos()
    {
        return $this->morphMany('App\Photos', 'Imageable');
    }
}
