<?php

namespace App\Http\Controllers\Vues;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class RECAP_Projet_EnCoursController extends Controller
{
    //
    public function  index(){
        $user=Auth::user()->email;
            
             $title="Tableau de bord";
                 $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->pluck('code_client')->first();
                               $Projet_EnCours = DB::table('RECAP_Projet_EnCours')
                               ->where('MaitreOuvrage','=',$results)->get();
                               return view('front.compte.vues.CONTRÔLE_CHANTIER.Projet_EnCours',compact('Projet_EnCours'),compact('title'));      

    }
}
