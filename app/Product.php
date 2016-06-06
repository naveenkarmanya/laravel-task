<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $guarded = [''];
    protected $table = "Product";
    public $timestamps = false;
    protected $primaryKey = "ID";
    public function Photos()
    {
        return $this->morphMany('App\Photos', 'Imageable');
    }
}
