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
      $b_bon_code=$request->id;
      $user=Auth::user()->id; 
      $date = Carbon::now('d F Y'); 
      $co='1';
        /* $order = b_bordereaux::whereRaw('code = (select max(code) from b_bordereaux)')->where('b_bon_code','=', $b_bon_code)->pluck('code');
          $codeBord = intval($order[0] );
           $codeBord=$codeBord+1;
       $data=[
         'code'=>$codeBord,
        'code_categorie_plan'=>$co,
       'b_bon_code'=>$b_bon_code,
      'date_Reception'=>$date ,
    ];

      $b_bon_code=$request->id;
      $user=Auth::user()->id; 
      $date = Carbon::now('d F Y'); 
      $co='1';
 
       $go= DB::table('b_bordereaux')->insertGetId($data);*/
     
      /***upload file store each image */
        $codeBord=1;
        $image = $request->file('file');
          $filesize= $request->file('file')->getSize();  // bytes
        
           $filesizekilo = round($filesize / 1024, 2); // kilobytes with two digits number2 
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name= $filename.'-'.time().'.'.$extension;
        $image->move(public_path('/bordereau/Arhcitecture'),$file_name);
        $aa[] = [
          'Intituleplan' => $fileInfo,
          'taille_plan' => $filesizekilo,
          'code_categoriePlan' =>  '1',
          'datecreation' => $date,
          'b_bordereaux_code' => $codeBord,
          'b_bon_code' => $b_bon_code,
      ];
      $imageUpload=  SouCatégorie_plan::insert($aa);
     
        if( $imageUpload ) {
          return Response::json('success', 200);//->with('uploaded','Succesiful uploaded');
          
      } else {
         return Response::json('error', 400);
      }
       /***End upload file */
      //  return response()->json(['success'=>$file_name]);
        //return Redirect::back()->withErrors(['msg' => 'vos fichiers a été bien enregistrez dans la base de données']);
    
      
   
}}
