<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Taffaire;
use App\B_bcommande;
use DB;
use Carbon\Carbon;
use Redirect;
class AffairesController extends Controller
{
    //
    public function affectaion_affaire(Request $request){
   // $request->all();
     // return $id;
      $anneee = date('Y');
        $query= DB::select(DB::raw("exec maxcodeAffaireAgence1 :annee, :codeagence"),[
        ':annee' => $anneee,
        ':codeagence' => $request->code_ag,
    ]);
    foreach($query as $item){
        $qryRslt = json_decode(json_encode($item), true)[''];
       // $qryfin=$qryRslt+1;
     }
        $qryRslt;
   
           B_bcommande::where('code', $request->codeBC)->get();
           $codeAffaire = B_bcommande::find($request->codeBC);
             if($codeAffaire){
                              $codeAffaire->codeAffaire =$qryRslt;
                              $codeAffaire-> code_agence= $request->code_ag;
                              $codeAffaire->save();
           
  
                              }

                              $resultatExiste= Taffaire::find($codeAffaire->codeAffaire);
                             if($resultatExiste){
                              return Redirect::back()->withErrors(['msg' => 'Affaire Existe ']);

                             }else{
                  /*   return   $affairesfinale = Taffaire::create([
                                'Code_Affaire' => $data['qryRslt'],
                                'IntituleAffaire' => $data['intitule_proj'],
                                'code_agence' => $data['code_agnce'],
                                 'Cocontractant' => $data['CodeWilaya'],
                              'DateCreationAffaire' => $data['CodeWilaya'],
                               
                                'MaitreOuvrageNom' => $data['CodeWilaya'],
                                'MaitreOuvrageAdresse' => $data['MaitreOuvrageAdr'],
                                'MaitreOuvrageTel' => $data['MaitreOuvrageTel'],
                                'MaitreOuvrageFax' => $data['MaitreOuvrageFax'],
                                 
                                 'MaitreOuvrageMail' => $data['CodeWilaya'],
                                 'CodeWilaya' => $data['CodeWilaya'],
                                 'CodeCommune' =>$data['CodeCommune'],
                                ]);  /* 'Nom_DR' => '', 
                               /*  'dent_dem' => $data['email'],
                                'DateEtablConv' => '',
                                'descript_projet' => '',
                                'MaitreOuvrage' => '',
                                'Typeouvrage' => '',
                                ,
                                'TypeSousouvrage' => '',
                                ,
                                'TypeCocontractant' => '',
                          
                         ]);  */
                           

                           
           $affaires=B_bcommande::WhereNotNull('codeAffaire')->get();
         
           return view('admin.Affaire.Renseiegnement_Affaire',compact('codeAffaire'),compact('affaires'));
          }
       
    }
    public function Renseiegnement_Affaire(){

      return view('admin.Affaire.Renseiegnement_Affaire',compact('codeAffaire'),compact('affaires'));

    }
    /*  $results = Taffaire::select(DB::raw(' cast(RIGHT(Code_affaire,3)as int)as query ',DB::raw('left(Code_affaire,4)') ))
                 ->where('code_agence',$request->code_agence)
                 ->where(DB::raw("left(Code_affaire,4)"),'2022')
             ->first();
             $x = "whatever";
              $ids=$request->code_ag;
            $query=DB::select(DB::raw("select --*
             cast(RIGHT(Code_affaire,3)as int) 
               FROM [RCTC_CONSOLID_DGFev22].[dbo].[Taffaire]
                where ISNUMERIC(RIGHT(Code_affaire,3))=1
                 and RIGHT(Code_affaire,3) not like '%.%'
                 and  code_agence  ='$ids'  
                and  ISNUMERIC(left(Code_affaire,4))=1
                  and left(Code_affaire,4) not like '%.%'
                 and left(Code_affaire,4) =cast( YEAR(getdate()) as nvarchar)
         ")
        );  /*  $ldate = date('Y');
  
       if($qryfin < 10) {
      
         $resultat =  '00'. $qryfin; 
       }
       elseif($qryfin < 100) {
         $resultat =  '0'. $qryfin; 
        
       } 
           $codeAffaire=$ldate .''.$request->code_ag.''.$resultat;*/
   // $codeAffaire;*/
}
