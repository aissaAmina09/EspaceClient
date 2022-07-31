<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetReclamation extends Model
{
    //
    protected $table = 'objet_reclamation';
    protected $dateFormat = 'Y-d-m H:i:s';
    public $timestamps = true;
   
    protected $primaryKey = 'id';
}
