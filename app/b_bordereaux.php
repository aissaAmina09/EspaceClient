<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class b_bordereaux extends Model
{
    //
    protected $primaryKey = 'code';
    protected $fillable = ['code'];
    protected $table = 'b_bordereaux';
    public $timestamps = false;
}
