<?php

namespace App\Http\Controllers\Vues;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use DB;
class NONDEMARRESController extends Controller
{
    //
    public  function index(){
        if (Auth::check()){

             $user=Auth::user()->email;
            
             $title="PROJETS NON DEMARRÉS";
                 $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->where('demande_suivi.identifiant','=',$user)
                               ->pluck('code_client')->first();
                                 $NONDEMARRES = DB::table('ProjetNonDemar')//ORDER BY dbo.Taffaire.Code_Affaire DESC
                               ->where('MaitreOuvrage','=',$results)->paginate(10);
                               return view('front.compte.vues.CONTRÔLE_CHANTIER.NONDEMARRES',compact('NONDEMARRES'),compact('title'));      
         }else {
            return 'time out';
        }
    
    }

}
