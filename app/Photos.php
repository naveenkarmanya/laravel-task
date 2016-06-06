<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
       protected $guarded = [''];
    protected $table = "Photo";
    public $timestamps = false;
    protected $primaryKey = "ID";
    public function Imageable()
    {
        return $this->morphTo();
    }
}
