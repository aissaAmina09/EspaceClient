<?php
namespace App\Http\Controllers\Vues;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class EXAMINESController extends Controller
{
    //
    public function index(){
        if (Auth::check()){

            $user=Auth::user()->email;
           
            $title="DOSSIERS EXAMINÉS / PARTIELLEMENT EXAMINÉS";
                $results = DB::table('users')
                              ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                              ->where('demande_suivi.identifiant','=',$user)
                              ->pluck('code_client')->first();
                                $EXAMINES = DB::table('DossierRecRapportValid')
                              ->where('MaitreOuvrage','=',$results)->get();
                              return view('tab',compact('EXAMINES'),compact('title'));      
        }else {
           return 'time out';
       }
   
    }
    
    public function filterEXAMINES(Request $request){
        // $request->all();
                $NConvention=$request->NConvention; 
                 $IntituleAffaire=$request->IntituleAffaire; 
                $country=$request->country; 
                 $state=$request->state; 
                 if (Auth::check()){
                 $user=Auth::user()->email;
                 $results = DB::table('users')
                                      ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                                      ->where('demande_suivi.identifiant','=',$user)
                                      ->pluck('code_client')->first();
                 $query=  DB::table('DossierRecRapportValid')->where('MaitreOuvrage','=',$results);
                 
                    if( $request->NConvention){
          
                    $data = $query->where('Code_Affaire', 'LIKE', "%" . $request->NConvention . "%");
          
                    }
                    if( $request->IntituleAffaire){
          
                        $data = $query->where('IntituleAffaire', 'LIKE', "%" .$IntituleAffaire . "%");
            
                        }
                        if( $request->country){
          
                            $data = $query->where('nom_wilaya', 'LIKE', "%" . $request->country . "%");
                
                            }
                            if( $request->commune){
          
                                $data = $query->where('commune', 'LIKE', "%" . $request->state . "%");
                    
                                }
                                  $Traitements = $query->paginate(10);
                                  $title="DOSSIERS EN COURS DE TRAITEMENT";
                                  return view('front.compte.vues.TRAITEMENT DES DOSSIERS RECEVABLES.Traitement',compact('Traitements'),compact('title'));        
                                }else {
                                  //return 'time out';
                                  return redirect()->route('logout-compte');
                              }
            }
    public function Traitement(){
        if (Auth::check()){

            $user=Auth::user()->email;
           
            $title="DOSSIERS EN COURS DE TRAITEMENT";
                $results = DB::table('users')
                              ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                              ->where('demande_suivi.identifiant','=',$user)
                              ->pluck('code_client')->first();
                                $Traitements = DB::table('DossierRecRapportNonEntame')
                              ->where('MaitreOuvrage','=',$results)->paginate(10);
                              return view('front.compte.vues.TRAITEMENT DES DOSSIERS RECEVABLES.Traitement',compact('Traitements'),compact('title'));      
        }else {
           return 'time out';
       }
   
    }
    //jjjjj
    
    public function filterTraitement(Request $request){
      // $request->all();
              $NConvention=$request->NConvention; 
               $IntituleAffaire=$request->IntituleAffaire; 
              $country=$request->country; 
               $state=$request->state; 
               if (Auth::check()){
               $user=Auth::user()->email;
               $results = DB::table('users')
                                    ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')
                                    ->where('demande_suivi.identifiant','=',$user)
                                    ->pluck('code_client')->first();
               $query=  DB::table('DossierRecRapportNonEntame')->where('MaitreOuvrage','=',$results);
                  if( $request->NConvention){
        
                  $data = $query->where('Code_Affaire', 'LIKE', "%" . $request->NConvention . "%");
        
                  }
                  if( $request->IntituleAffaire){
        
                      $data = $query->where('IntituleAffaire', 'LIKE', "%" .$IntituleAffaire . "%");
          
                      }
                      if( $request->country){
        
                          $data = $query->where('nom_wilaya', 'LIKE', "%" . $request->country . "%");
              
                          }
                          if( $request->commune){
        
                              $data = $query->where('commune', 'LIKE', "%" . $request->state . "%");
                  
                              }
                                $Traitements = $query->paginate(10);
                                $title="DOSSIERS EN COURS DE TRAITEMENT";
                                return view('front.compte.vues.TRAITEMENT DES DOSSIERS RECEVABLES.Traitement',compact('Traitements'),compact('title'));        
                              }else {
                                //return 'time out';
                                return redirect()->route('logout-compte');
                            }
          }
        
}
