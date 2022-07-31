<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;use Auth;

class BagencesController extends Controller
{
    public function getStates(Request $request){

       
            $states = DB::table("Bagences")->where("Nom_DR",$request->cat_id)->orderBy('nom_ag','ASC')->pluck("code_ag","nom_ag");
            
     
        return response()->json($states);

  
} 
public function gffetStates(Request $request) {
   $states = DB::table("Bcommunes")->where("codewilaya",$request->countryid)->pluck("commune","ccom");
   return response()->json($states);
   }


   public function subcatfront(Request $request) {

    
    $states =DB::table("Bagences") 
    //->selectRaw(' CONCAT(Nom,Prénom) as full_name')
    ->selectRaw(" Nom+' ' +Prénom as full_name")
    ->join('Busers','Busers.Structure','=','Bagences.code_ag')
    ->where("Bagences.nom_ag",$request->cat_id)
    ->orderBy('full_name')
    ->pluck('full_name');
    return response()->json($states);
  

   }
}
/**  @if (!Auth::user()->isAdmin())
                            <?php  $users = \App\Consultation::where('agencee', '=',Auth::user()->agencee)->get(); ?>
                            <span class="badge badge-primary">   {{ $users->count() }}</span>@endif */