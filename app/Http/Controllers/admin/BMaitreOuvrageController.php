<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\BMaitre_ouvrage;use DB;
use App\B_bcommande;

class BMaitreOuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

  
  
    $bmaitre = DB::table('Taffaire')->join('Bmaitre_ouvrage','Bmaitre_ouvrage.code','=','Taffaire.MaitreOuvrage')
                                //->leftjoin('b_bcommandes','b_bcommandes.Code_MaitreOuvrage','=','Bmaitre_ouvrage.code')
                                ->select(DB::raw('Taffaire.MaitreOuvrage,Bmaitre_ouvrage.Abrevation,Bmaitre_ouvrage.nom,Bmaitre_ouvrage.code,Bmaitre_ouvrage.Nom_DR,count(*) as nbr_totale'))
                                ->groupBy('Taffaire.MaitreOuvrage','Bmaitre_ouvrage.Abrevation','Bmaitre_ouvrage.Nom_DR','Bmaitre_ouvrage.nom','Bmaitre_ouvrage.code')->paginate(10);

                                return view('admin.Bmaitre_ouvrage.List-BMaitre_ouvrage' ,['bmaitre'=>$bmaitre]);
    }
    
    public function filterMaitreOuvrage(Request $request){
      
                $Code_FamilleMouvrage=$request->famille;
        
                $nom=$request->nom;
                $Abrevation=$request->Abrevation;
                $code=$request->code;
            
                
              
        
        $data=  BMaitre_ouvrage::query();
        
        if( $request->code){
        
            $data = $data->where('code', 'LIKE', "%" . $request->code . "%")
                          ->orwhere('nom', 'LIKE', "%" . $request->nom . "%")
                          ->orwhere('Abrevation', 'LIKE', "%" . $request->Abrevation . "%");
        
            }
            if( $request->famille){
        
                $data = $data->where('FamilleMouvrage', 'LIKE', "%" . $request->famille . "%");
                            
            
                }
          
        $bmaitre = $data->paginate(12);
        //$count=Rtableprincip::count();
        return view('admin.List-BMaitre_ouvrage' ,['bmaitre'=>$bmaitre]);
        
            }

    /**
     * Show the form for creating a new resource.filterBMaitre_ouvrage
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->all();
      
            $BMaitre_ouvrage= new BMaitre_ouvrage;


          $codeCodifier = BMaitre_ouvrage::select(DB::raw('  max(cast(RIGHT(code,5)as int))'))
                                 ->whereRaw('ISNUMERIC (RIGHT(code,5))=1')->first(); 
                               
          //json_decode( $codeCodifier, true)[''];
           $a=$logMessage = 'NM'. json_decode( $codeCodifier, true)[''];
           $BMaitre_ouvrage->code = $a;
            $BMaitre_ouvrage->nom =$request->nom;
          
          $BMaitre_ouvrage->adr =$request->adr;
           $BMaitre_ouvrage->tel =$request->tel;
           $BMaitre_ouvrage->Secteur =$request->Secteur;
           $BMaitre_ouvrage->TutelleTiers =$request->Tutelle;
           $BMaitre_ouvrage->FamilleMouvrage =$request->famille;
           $BMaitre_ouvrage->GroupeTiers =$request->Groupe;
           $BMaitre_ouvrage->Wilaya =$request->Wilaya;
           $BMaitre_ouvrage->Commune =$request->Commune;
           $BMaitre_ouvrage->adr =$request->Adresse;
          // $BMaitre_ouvrage->Tel =$request->Tel;
           $BMaitre_ouvrage->Fax =$request->Fax;
           $BMaitre_ouvrage->Email =$request->Email;
           $BMaitre_ouvrage->siteWeb =$request->siteWeb;
           $BMaitre_ouvrage->CompteComptable =$request->CptComptable;
           $BMaitre_ouvrage->save();


           return Redirect::back()->withErrors(['succes' => '
            
           Votre demande a été bien enregistrez.']);
           
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function show(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function edit(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }
}
