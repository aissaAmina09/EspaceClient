<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    //
    protected $table='login_activities';
    protected $primaryKey ='id';
    protected $fillable = [
        'user_id', 'user_agent','ip_addres','created_at','updated_at'
    ];
    public function getDateFormat() {
        return 'Y-d-m H:i:s.v';
    }
}
