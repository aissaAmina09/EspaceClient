<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Reclamation;
use Carbon\Carbon;
class ReclamationController extends Controller
{
    //

    public function index(){
        
        $title="Réclamation";
        return view('front.compte.RéclamationClient.index' ,['title'=>$title]);
       // return view('front.compte.RéclamationClient.index');
   
    }
    public function create(){
        $title="Réclamation";

        return view('front.compte.RéclamationClient.create' ,['title'=>$title]);

    }
    public function store(Request $request){
      // return  $request->all();
       if (Auth::check())
       {
            $date = Carbon::now();
            $user=Auth::user()->id;
            $reclamation= new Reclamation;
            $reclamation->client_id = $user;
            $reclamation->Intitule_projet =$request->Intitule_projet;
            $reclamation->Message =$request->Message;
            $reclamation->Ref_Bon_commande =$request->Ref_Bon_commande;
            $reclamation->wilaya =$request->wilaya;
           // $reclamation->id_objetReclamation=$request->ObjetReclamation;
            
            $reclamation->Reponse ='0';
            
         //   $reclamation->Date_de_reclamation=$date;
           
            $reclamation->save(); 
            $title="Réclamation";
        return view('front.compte.RéclamationClient.index_id' ,['title'=>$title]);
    } else {
        return redirect()->route('logout-compte');
      }
}

public function show(Request $request,$id){
       $request->id;
   // return $id;find($request->id);
   $show = Reclamation::join('users','users.id','reclamations.client_id')
                      ->where('reclamations.id',$request->id)->get();

   $title="Réclamation";

   
   return view('front.compte.RéclamationClient.show' ,['title'=>$title],compact('show'));
}

public  function send_reclamation(){
    $title="Réclamation";
    return view('front.compte.RéclamationClient.Envoyer' ,['title'=>$title]);
}

public  function boite_Reception(){
    $title="Réclamation";
    return view('front.compte.RéclamationClient.boite_Reception' ,['title'=>$title]);
}
}