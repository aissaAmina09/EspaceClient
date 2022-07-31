<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    //
    protected $dateFormat = 'Y-d-m H:i:s';
    public $timestamps = true;
    protected $table = 'reclamations';
    protected $primaryKey = 'id';
}
