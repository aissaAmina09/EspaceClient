<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User ;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use DB;
class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait;
    //
    use Notifiable;
    protected $guard ='admin';
    protected $table = 'Busers';
    protected $primaryKey = 'Matricule';

    


        /*
    ---------------------------------------------------------------
    |
    |       Scopes
    |
    ---------------------------------------------------------------
    */ 

    public function scopePrivileges($volet_app)
    {
       
        $auth=auth()->guard('admin')->user()->profile;

        $privileges = DB::table('privileges') ->join('profiles', 'profiles.code', 'privileges.profile_code')
        ->where('profiles.code', $auth)->where('volet_app',$volet_app)->get();
        foreach($privileges as $privilege){  return $privilege;
        }
    }

    public function scopeAllPrivileges()
    {
        $auth=auth()->guard('admin')->user()->profile;
        $privileges = DB::table('privileges') ->join('profiles', 'profiles.code', 'privileges.profile_code')
        ->where('profiles.code', $auth)->get();
        
        return $privileges;
    }
}
