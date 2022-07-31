<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie_plan extends Model
{
    //categorie_plan
    protected $primaryKey = 'code_categorie';

    protected $table = 'categorie_plan';
    public $timestamps = false;
}
