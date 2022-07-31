<?php

namespace App\Http\Controllers\Vues;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\ProjetEnCours;
class ProjetEnCoursController extends Controller
{
    //
    public function  index(){
        $user=Auth::user()->email;
            
             $title="PROJETS EN COURS";
                  $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->pluck('code_client')->first();

                                $ProjetEnCours=ProjetEnCours::where('MaitreOuvrage','=',$results)->paginate(5);
                               return view('front.compte.vues.CONTRÔLE_CHANTIER.Projet_EnCours',compact('ProjetEnCours'),compact('title'));      

    }
   
}
