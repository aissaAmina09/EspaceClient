<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\b_bordereaux;
use App\SouCatégorie_plan;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Response;
use DB;
use App\B_bcommande;
use Illuminate\Support\Facades\Input;
class b_bordereauxController extends Controller
{
    //
    public function uploadocscanné(Request $request,$code){
        return  $use=B_bcommande::find($code);  
    }
    public function show(Request $request ,$param1,$param2){
       // return $request->all();
           $resultatExiste= b_bordereaux::find($param1);
       if($resultatExiste){
         $result=b_bordereaux::join('categorie_plan','categorie_plan.code_categorie','=','b_bordereaux.code_categorie_plan')->where('b_bordereaux.b_bon_code',$param2)->get();
        return view('front.compte.Bordereaux.index' ,['result'=>$result]);
                              }
    }
public function uppload(Request $request,$code){
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
$upload=$request->code;
//dd($go);
return view('front.compte.BonDeCommande.DetailProjetnBeforeupload')
->with('message','Votre bon de commande a été bien enregistrez ,  vous devez joindre le dossier technique')->with([ 'upload' =>$upload]);
}
    public function create_bordereau (Request $request){
        return view('front.compte.Bordereaux.create');
    }
    public function uploabordereau(Request $request,$id){
     // return $data;
  $dossier= $request->submit;
  $b_bon_code=$request->id;
     return  $checker = b_bordereaux::select('code')->where('b_bon_code',$b_bon_code)->exists();//teste existe bordereau pour la premiere fois  return true or false
       if ($checker === true){
          $codeBordereau=  b_bordereaux::orderBy('code', 'desc')->first();
         $lasteborderau=$codeBordereau->code;//return last code bordereau 
         $user=Auth::user()->id; 
         if ($request->hasFile('docSig')) {
          foreach($request->file('docSig') as $image)
          {
          $destinationPath = '/bordereau/Arhcitecture';
            $name = $image->getClientOriginalName();
            $filesize= $image->getSize();
            $image->move(public_path('/bordereau/Arhcitecture'),$name);
           //  $extension = pathinfo($image, PATHINFO_EXTENSION);
            // return $file_name= $image.'-'.time().'.'.$extension;
        $data[] = $name; 
    $dossier= $request->submit;//return category plan
    $b_bon_code=$request->id;
    $date = Carbon::now('d F Y'); 
        $imageUpload   = new SouCatégorie_plan;
        $imageUpload->Intituleplan= $name;
        $imageUpload->taille_plan=  $filesize;
        $dossier= $request->submit;
        if($dossier === 'Dossier-Architecteure'){$code_categoriePlan='1';}
        if($dossier === 'Dossier-Géniecivil'){$code_categoriePlan='2';}
        if($dossier === 'Dossier-Notecalcule'){$code_categoriePlan='3';}
        if($dossier === 'Dossier-Designextérieur'){$code_categoriePlan='4';}
        $imageUpload->code_categoriePlan= $code_categoriePlan;
        $imageUpload->datecreation=$date;
        $imageUpload->b_bordereaux_code='1';
        $imageUpload->b_bon_code=$b_bon_code;
        $imageUpload->save();
         }
      // $imageUpload=  SouCatégorie_plan::insert($aa);
         if( $imageUpload ) {
          return redirect()->back()->with('message', 'vos fichiers a été bien enregistrer!');
          // return Response::json('success', 200);//->with('uploaded','Succesiful uploaded');
       } else {
          return Response::json('error', 400);
       }
          }//end $request->hasFile('docSig')
         //echo "existe bordereau";
     } else {
      return 'suite';
     }
    }
public function create(Request $request,$id){
  $upload=B_bcommande::where('code','=',$id)->get();  
  return view('front.compte.Bordereaux.create',['upload'=>$upload]);
}
    }
