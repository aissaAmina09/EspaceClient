<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\b_bordereaux;
class SouCatégorie_plan extends Model
{
    //

    protected $table = 'SouCatégorie_plan';
    
    protected $fillable = ['code_categorie_plan'];
    protected $primaryKey = 'code_SouCatégorie';
    public function getDateFormat() {
        return 'Y-d-m H:i:s.v';
    }
    public $timestamps = false;

    public function details(){


        return $this->hasMany(b_bordereaux::class,'b_bordereaux_code','code_SouCatégorie');
      }
}
