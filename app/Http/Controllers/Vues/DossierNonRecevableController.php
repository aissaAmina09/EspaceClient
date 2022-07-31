<?php

namespace App\Http\Controllers\Vues;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Taffaire;
use App\User;
use App\DossierNonRecevable;
class DossierNonRecevableController extends Controller
{
    //
    public  function index(){//NonRecevable
        if (Auth::check()){

             $user=Auth::user()->email;
            
             $title="DOSSIERS NON RECEVABLES";
                 $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->where('demande_suivi.identifiant','=',$user)
                               ->pluck('code_client')->first();
                                 $nonrecevables = DB::table('DossierNonRecevable')
                               ->where('MaitreOuvrage','=',$results)->get();
                               return view('front.compte.vues.RECEVABILITE_DU_DOSSIER.nonRecevable',compact('nonrecevables'),compact('title'));      
         }else {
            //return 'time out';
            return redirect()->route('logout-compte');
        }
    
    }
      public  function Encours(){//RECEVABILITE EN COURS DE TRAITEMENT
        if (Auth::check()){

             $user=Auth::user()->email;
            
             $title="RECEVABILITE EN COURS DE TRAITEMENT";
                 $results = DB::table('users')
                               ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                               ->where('demande_suivi.identifiant','=',$user)
                               ->pluck('code_client')->first();
                                 $encours = DB::table('RecevabiliteNonPrononcer')
                               ->where('MaitreOuvrage','=',$results)->get();
                               return view('front.compte.vues.RECEVABILITE_DU_DOSSIER.encours',compact('encours'),compact('title'));      
         }else {
            return 'time out';
        }
    
    } public function filterEncours(Request $request){
  // $request->all();
      $NConvention=$request->NConvention; 
       $IntituleAffaire=$request->IntituleAffaire; 
      $wilaya=$request->country; 
       $commune=$request->state; 
       $wialayRe = DB::table("bwilayas")->where("CODE_Wilaya",$wilaya)->pluck("nom_wilaya");//récupuration le nom de wilaya
       $communeRe = DB::table("Bcommunes")->where("ccom",$commune)->pluck("commune");//récupuration le nom de commune
       $user=Auth::user()->email;
       $results = DB::table('users')
                            ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                            ->pluck('code_client')->first();
       $query=  DB::table('RecevabiliteNonPrononcer')->where('MaitreOuvrage','=',$results);
          if( $request->NConvention){

          $data = $query->where('Code_Affaire', 'LIKE', "%" . $request->NConvention . "%");

          }
          if( $request->IntituleAffaire){

              $data = $query->where('IntituleAffaire', 'LIKE', "%" .$IntituleAffaire . "%");
  
              }
              if( $request->country){

                  $data = $query->where('nom_wilaya', 'LIKE', "%" . $wialayRe . "%");
      
                  }
                  if( $request->commune){

                      $data = $query->where('commune', 'LIKE', "%" . $communeRe . "%");
          
                      }
                        $encours = $query->paginate(10);
                       $title="PROJETS EN COURS";
                      return view('front.compte.vues.RECEVABILITE_DU_DOSSIER.encours',compact('encours'),compact('title')); 

  }
  public function filterNonrecevable(Request $request){
// $request->all();
if (Auth::check()){
      $NConvention=$request->NConvention; 
       $IntituleAffaire=$request->IntituleAffaire; 
      $wilaya=$request->country; 
       $commune=$request->state; 
        $wialayRe = DB::table("bwilayas")->where("CODE_Wilaya",$wilaya)->pluck("nom_wilaya");//récupuration le nom de wilaya
       $communeRe = DB::table("Bcommunes")->where("ccom",$commune)->pluck("commune");//récupuration le nom de commune
      
       $user=Auth::user()->email;
       $results = DB::table('users')
                            ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                            ->pluck('code_client')->first();
       $query=  DB::table('DossierNonRecevable')->where('MaitreOuvrage','=',$results);// requete  Vue non recevable->where('MaitreOuvrage','=',$results)
     // filtre requete 
          if( $request->NConvention){

          $data = $query->where('Code_Affaire', 'LIKE', "%" . $request->NConvention . "%");

          }
          if( $request->IntituleAffaire){

              $data = $query->where('IntituleAffaire', 'LIKE', "%" .$IntituleAffaire . "%");
  
              }
              if( $request->country){

                  $data = $query->where('nom_wilaya', 'LIKE', "%" . $wialayRe . "%");
      
                  }
                  if( $request->commune){

                      $data = $query->where('commune', 'LIKE', "%" . $communeRe . "%");
          
                      }
                        $nonrecevables = $query->paginate(10);
                        $title="DOSSIERS NON RECEVABLES";
                       return view('front.compte.vues.RECEVABILITE_DU_DOSSIER.nonRecevable',compact('nonrecevables'),compact('title'));      
                      }else {
                        //return 'time out';
                        return redirect()->route('logout-compte');
                    }
  }

    

   

}
