<?php

namespace App\Http\Controllers\Vues;
use App\Http\Controllers\Controller;
use Auth;
use DB;

use Illuminate\Http\Request;

class ProjetArretController extends Controller
{
    public function  index(){
        $user=Auth::user()->email;
            
             $title="Tableau de bord";
                 $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->pluck('code_client')->first();
                               $Projet_Arrets = DB::table('ProjetArret')
                               ->where('MaitreOuvrage','=',$results)->get();
                               return view('front.compte.vues.CONTRÔLE_CHANTIER.ProjetArret',compact('Projet_Arrets'),compact('title'));      

    }
}
