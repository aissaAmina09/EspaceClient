<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\B_bcommande;
use Auth;
use App\User;
use DB;
use PDF;
use Illuminate\Support\Facades\Input;


use Notification;
use Illuminate\Notifications\Notifiable;

use App\Notifications\NouveauxBonDeCommande;

use App\Buser;use App\BoncommandeBloc;

class BBClientController extends Controller
{
    //



    public function showPDF($id)
    {//export to PDF

    $bcommande = B_bcommande::where("b_bcommandes.code", "=",$id) ->orderBy('code', 'desc')->get();
    $bbloc=BoncommandeBloc::where("boncommande_blocs.bcommande_code", "=",$id) ->get();
    //$pdf=PDF::loadView('admin.teste-imprime-admin',compact('bcommande'),compact('bbloc'));
  // return $pdf->download('admin.teste-imprime-admin.pdf');
  return view('admin.teste-imprime-admin' ,['bcommande'=>$bcommande],['bbloc'=>$bbloc]);

    }
public function showsigne($id){

  return 'hhh';
}
    public function BureauEtude(){

        $user=Auth::user()->id;

        $BureauEtude=DB::table('b_bcommandes')->where('client_id',"=",$user)->get();

return view('front.compte.showlistBureauEtude' ,['BureauEtude'=>$BureauEtude]);

        }
        
 public function display(){
                          if (Auth::check())
                                           {
                                              $user=Auth::user()->id; 
                                              $bcommandeuser=DB::table('b_bcommandes')->where('client_id',"=",$user)->orderby('code','desc')->get();
                                                //return view('front.compte.showlist' ,['bcommandeuser'=>$bcommandeuser]);
                                               $title="Bon de Commande";
                                             return view('front.compte.BonDeCommande.listes' ,['title'=>$title,'bcommandeuser'=>$bcommandeuser]);
                                             return view('front.compte.BonDeCommande.index' ,['title'=>$title,'bcommandeuser'=>$bcommandeuser]);
                                            } else {
                                                    return redirect()->route('logout-compte');
                                                   }
                           }
    public function create(){
                              if (Auth::check())
                                               { 
                                                $title="Bon de Commande";
                                               return view('front.compte.BonDeCommande.create' ,['title'=>$title]);
                                                return view('front.compte.BonDeCommande.createnewbbc' ,['title'=>$title]);
                                                
                               }
                               else {
                                return redirect()->route('logout-compte');
                                 }
                            }
                            public function  createBonCommanden(){
                              if (Auth::check())
                                               { 
                                                $title="Bon de Commande";
                                               // return view('front.compte.BonDeCommande.create' ,['title'=>$title]);
                                                return view('front.compte.BonDeCommande.createnewbbc' ,['title'=>$title]);
                                                
                               }
                               else {
                                return redirect()->route('logout-compte');
                                 }
                            }
                           
    public function store(Request $request)
                                             {
                                                //dd($request->all())  ;
                                            ///  return $request->all();
                                           $request->aa=date("m-d-Y", strtotime($request->DateDebuttravaux));
                                               $data=[
                                                'client_id' =>$request->user()->id,
                                                'intitule_proj' =>$request->intitule_proj,
                                                'descript_projet' =>$request->descript_projet,
                                                
                                                'MaitreOuvrage' =>$request->MaitreOuvrage,
                                                'MaitreOuvrageAdr' =>$request->MaitreOuvrageAdr,
                                                'MaitreOuvrageRS' =>$request->MaitreOuvrageRS,
                                                'MaitreOuvrageNif' =>$request->MaitreOuvrageNif,
                                                'MaitreOuvrageTel' =>$request->MaitreOuvrageTel,
                                                'MaitreOuvrageFax' =>$request->MaitreOuvrageFax,
                                                'MaitreOuvrageEmail' =>$request->MaitreOuvrageEmail,
                                                 'maitre_oeuv' =>$request->user()->Nom,
                                                 'maitre_oeuvAdresse' =>$request->user()->Adresse,
                                                 'maitre_oeuvEmail' =>$request->user()->email,
                                                 'intitule_proj' =>$request->intitule_proj,
                                                 'latitude' =>$request->latitude,
                                                 'longitude' =>$request->longitude,
                                                 'CodeWilaya' =>$request->country,
                                                 'SurfaceConstruitM2' =>$request->SurfaceConstruitM2,
                                                 'DateDebuttravaux' => $request->aa,
                                                 'DateDélaisTravaux'  =>$request->DateDélaisTravaux,
                                                 'maitre_oeuv' =>$request->maitre_oeuv,
                                                 'maitre_oeuvTél'=>$request->maitre_oeuvTél,
                                                 'maitre_oeuvFax' =>$request->maitre_oeuvFax,
                                                 'maitre_oeuvAdresse' =>$request->maitre_oeuvAdresse,
                                                 'maitre_oeuvEmail' =>$request->maitre_oeuvEmail,
                                                'laboratoire' =>$request->laboratoire,
                                                 'laboratoireEmail' =>$request->laboratoireEmail,
                                                 'laboratoireAdresse' =>$request->laboratoireAdresse,
                                                 'laboratoireFax' =>$request->laboratoireFax,
                                                 'AvantProjet'=>$request->get('Esquisse') ? 1 : 0,
                                                 'Esquisse'=>$request->get('Esquisse') ? 1 : 0,
                                                 'Projetdexécution'=>$request->get('Projetdexécution') ? 1 : 0,
                                                 'IngNumeroagrement' =>$request->IngNumeroagrement,
                                                 'IngControlleSite' =>$request->IngControlleSite,
                                                
                                                 ];
                                              if ($request->bureauSel == 'new'){                                                
                                                 
                                                $data['bureau_etudTél'] = $request->bureau_etudTél;
                                                $data['bureau_etud'] = $request->bureau_etud;
                                                $data['bureau_etudFax'] = $request->bureau_etudFax;  
                                                $data['bureau_etudAdr'] = $request->bureau_etudAdr;       
                                                $data['IngNumeroagrement'] = $request->IngNumeroagrement; 
                                                $data['IngControlleSite'] = $request->IngControlleSite; 
                                                  
                                              } else {
                                                
                                                $data['bureau_etud']=$request->bureauSel;

                                                  $bureau=B_bcommande::select('bureau_etud','bureau_etudAdr','bureau_etudTél','bureau_etudFax','IngNumeroagrement','IngControlleSite')
                                                ->where('bureau_etud','=',$request->bureauSel)
                                                //->groupBy('bureau_etud','bureau_etudAdr','bureau_etudTél','bureau_etudFax')
                                                ->first();
                                                
                                               
                                                   $data['bureau_etudTél'] = $bureau->bureau_etudTél;
                                                $data['bureau_etudFax'] = $bureau->bureau_etudFax;  
                                                $data['bureau_etudAdr'] = $bureau->bureau_etudAdr;  
                                                $data['IngNumeroagrement']=$bureau->IngNumeroagrement; 
                                                $data['IngControlleSite']=$bureau->IngControlleSite; 
                                                
                                                //$data['bureau_etudTél'] = null;
                                               // $data['bureau_etudAdr'] = null;
                                                
                                               // $data['bureau_etudFax'] = null;
                                              }
                                                
                                              $user = Auth::user(); 
    
                                            // $request->DateDebuttravaux=date("m-d-Y", strtotime($request->DateDebuttravaux));
     
                                             $go= DB::table('b_bcommandes')->insertGetId($data);
                                                                                          $rows = $request->input('addmore');
                                                                                                 
                                                                                          foreach ($rows as $row)
                                                                                          {
                                                                                              $aa[] = [
                                                                                                  'bcommande_code' => $go,
                                                                                                  'Désignation' => $row['Désignation'],
                                                                                                  'NombredEtages' => $row['NombredEtages'],
                                                                                                  'EmpriseduBatiment' => $row['EmpriseduBatiment'],
                                                                                                  'NombredeBatiment' => $row['NombredeBatiment'],
                                                                                              ];
                                                                                          }
       
                                                                                          BoncommandeBloc::insert($aa);

                                                                                          //envoyer notification to admin
                                                                                         // $userr  = User::where('id','=','1')->get(); 
                                                                                         // $admins  = Buser::where('role_id','=','1')->get();

                                                                                         //Notification::send($userr,new NouveauxBonDeCommande($userr));

                                                                                      //  Buser::where('role_id','=','1')->firstOrFail()->notify(new NouveauxBonDeCommande($user));

                                                                                       // User:: where('id','=',$request->user()->id)->firstOrFail()->notify(new NouveauxBonDeCommande($user));
                                                                                    //return  $go;
                                                                                     //  return redirect()->back()->with([ 'go' => $go]);
                                                                                     DB::table('b_bordereaux')->insert([
                                                                                      'code' => 1,
                                                                                      'date_Reception' => date('Y-m-d H:i:s'),
                                                                                      'code_categorie_plan' =>'1' ,
                                                                                      'b_bon_code' => $go
                                                                                  ]);
                                                                            //  return $go;
                                                                                  return view('front.compte.BonDeCommande.DetailProjetnAfter',compact('go'));
                                                                                  // return Redirect::back()->with('message','Votre bon de commande a été bien enregistrez ,  vous devez joindre le dossier technique')->with([ 'go' => $go]);
                                                                                        //return Redirect::to('/list_bbcommandeClient');
    
                                                               }

                                                               /******************charger document scannée*********************** */
                                                               public function chargerdocument(Request $request,$code){
                                                                $use=   DB::table('b_bcommandes')->where('code',$code)->first();
                                                                $title="chargerement de document Scannee";
                                                                return view('front.compte.chargerdocumentScannee', compact('use'),compact('title'));
                                                                 
                                                                 
                                                               }
   /******************charger document scannée signée*********************** */
  
    public  function uploadsigne(Request $request,$code){
     
      $request->validate([
           'docSig'   => 'required|file|mimes:pdf,docx,doc'
       
      ]);
     
                   $use=B_bcommande::find($code);
       
                if ($request->hasFile('docSig')) {
               
                   $data = $request->input('docSig');
                  $photo = $request->file('docSig')->getClientOriginalName();
                   $fileName = pathinfo($photo,PATHINFO_FILENAME);
                  $destination = base_path() . '/public/documentsigne';
                    $request->file('docSig')->move($destination, $photo);
                 
                   $use->docSig=$fileName;
                  
              }
              $use->docSig=$fileName;
          $use->save();
        
          return Redirect::to('/list_bbcommandeClient');
        
            }

            public function DetaillProjet(Request $request,$code){
              $title="projets – Détails "; 
               $use=B_bcommande::where('code','=',$code)->get();  
               return view('front.compte.BonDeCommande.DetailProjetold',compact('title'),compact('use'));
               return view('front.compte.BonDeCommande.DetailProjet',compact('title'),compact('use'));
            }
            //*************************documentsigneEnvoyer******************************* ***/
            public function documentsigneEnvoyer(Request $request,$code){
                         return  $use=B_bcommande::find($code);  
                          
                       /*  if($use->CodeWilaya !=)   WilayaAg*/
                          }               
                          
                          
                          /***************Dossiergeniecivil */
            public function Dossiergeniecivil(Request $request,$code){


                            return view('front.compte.Dossiergeniecivil.index');
                   }

                          /*************************DossierArchitecture */
                          public function DossierArchitecture(Request $request,$code){


                            return view('front.compte.DossierArchitecture.index');
                          }
                      
}
 
