<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;use Redirect;
use App\DossierNonRecevable;
use App\ProjetEnCours;
use App\NONDEMARRES;
use App\RECAP_Projet_Arret;
use App\RECAP_Projet_EnCours;
use App\B_bcommande;
class CompteController extends Controller
{
    //
    public function index(){

      if (Auth::check())
      {
          $user=Auth::user()->email;
          $userID=Auth::user()->id;
        /*  if (DB::table('demande_suivi')->select('identifiant')->where('identifiant','=',$user)
                                           ->where('identifiant', '=', Auth::user()->email)->exists()) {
                             */                 
                                          
             $results = DB::table('users')
        ->join('demande_suivi','demande_suivi.identifiant', '=', 'users.email')->where('demande_suivi.identifiant',$user)
        ->pluck('code_client')->first();
         $COUNTbbc=B_bcommande::where('client_id','=', $userID)->count();
         $NonRecevables=DossierNonRecevable::where('MaitreOuvrage',$results)->get();$countNonRecevable=$NonRecevables->count();
        $countEncours=DB::table('RecevabiliteNonPrononcer')
        ->where('MaitreOuvrage',$results)->count();
        $EXAMINE=DB::table('DossierRecRapportValid')->where('MaitreOuvrage',$results)->get();
        $countEXAMINES=$EXAMINE->count();
        $Traitement=DB::table('DossierRecRapportNonEntame')->where('MaitreOuvrage',$results)->get();
        $Traitements=$Traitement->count();
        
        $countNONDEMARRES=NONDEMARRES::where('MaitreOuvrage',$results)->count();
        $countProjet_Arret=DB::table('ProjetArret')->where('MaitreOuvrage',$results)->count();
        $countProjetEnCours=DB::table('ProjetEnCours')->where('MaitreOuvrage',$results)->count();
        $currentUser    =Auth::guard('web')->user()->id; 
         $static2 = DB::select("SELECT client_id,nom_wilaya,nom,COUNT(*)as nombre FROM [espace_client2].[dbo].b_bcommandes   as bbc
        inner join bwilayas as b
                                on b.CODE_Wilaya=bbc.CodeWilaya
                                inner join users as u
                                on u.id=bbc.client_id
                       where client_id= $currentUser 
                          group by client_id ,nom_wilaya,nom");
       // return $static2;
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $data = [];
     
        
     foreach($static2 as $row) {
            $data['label'][] = $row->nom_wilaya;
            $data['coun'][] = $row->nombre;
            $data['data'][] = (int) $row->nombre;
          }
        $data['chart_data'] = json_encode($data);

        $title = 'Tableau de bord';
        $userid=Auth::user()->id;
        $outlet = DB::table("b_bcommandes")->select("latitude","longitude","intitule_proj")->where('client_id','=',$userid)->get();

        //chart
        
  $record = B_bcommande::select(\DB::raw("COUNT(*) as count"), 'CodeWilaya')->where('client_id','=',$userid)
                ->groupBy('CodeWilaya')->get();



        return view('front/compte/Tableau_de_bordNew')->with('outlet', $outlet)->with('data', $data)->with('countNonRecevable',$countNonRecevable)
        ->with('countEncours',$countEncours)
        ->with('countNONDEMARRES',$countNONDEMARRES)->with('countProjet_Arret',$countProjet_Arret)->with('countProjetEnCours',$countProjetEnCours)
        ->with('countEXAMINES',$countEXAMINES)->with('Traitements',$Traitements)->with('COUNTbbc',$COUNTbbc);

        return view('front/compte/Tableau_de_bord',['title'=>$title],compact('countNonRecevable','countEncours','countNONDEMARRES',
       'countProjet_Arret','countProjetEnCours','countEXAMINES','Traitements'));
      }else {
        return Redirect::route('logout-compte')->withErrors(['error' => '
            
       Votre demande de suivie n \'  est pas encore validé.']);
      }
     /* }
        else {
          return redirect()->route('logout-compte');
        }*/
    }

    public function ajouter_bon_new(){

        return view('front/compte/ajouter_bon_new');   
       // return view('front/compte/ajouter_bon');

    }
}
