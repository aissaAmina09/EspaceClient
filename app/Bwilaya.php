<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bwilaya extends Model
{
    //
    protected $table = 'Bwilaya';

    public function subcategories(){

        return $this->hasMany('App\Category', 'parent_id');

    }
}
