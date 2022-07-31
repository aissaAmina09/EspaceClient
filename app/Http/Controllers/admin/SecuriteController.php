<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Privilege;

use App\Tache;
use DB;

class SecuriteController extends Controller
{
    //
    public function getProfil($p){

        if($p=='N'){
            $securites=Profile::all();       
        }elseif ($p=='R'){
            $securites=Profile::where('limitation','!=', 'N')
                                  ->get(); 
        }elseif($p=='L'){
            $securites=Profile::where('limitation','!=', 'N')
                                  ->where('limitation','!=', 'R')
                                  ->get(); 
        }elseif($p=='P'){
            $securites=Profile::where('limitation', 'P')->get();  
        }          
return $securites;     
}

public function index() {
     $auth=  auth()->guard('admin')->user();
    //  $auth= Auth::user(); Auth::user()->profile
  $privilege = $auth->scopePrivileges('securites');
     
 $p= $privilege->visibilite;  // Niveau : N-Nationnal / R / L / P

$consultation=$privilege->consultation;
$insertion=$privilege->insertion;
$modification=$privilege->modification;
$suppression=$privilege->suppression;   



if($p == 'P') {return view('admin.pasacces'); }

$securites=$this->getProfil($p);


if ($consultation==1) 
      return view('admin.securites.securite',['securites'=> $securites,'auth'=> $auth,'consultation'=>$consultation,'insertion'=>$insertion,'modification'=>$modification,'suppression'=>$suppression,'p'=>$p]) ;
else  return view('admin.pasacces');  
}
  



public function update(Request $request){
$data=request()->all();

$this->validate($request,[
        'code'=>'required',
         'libelle'=>'required',
         'limitation'=>'required',
               ]);
        
Profile::where('code', $request->code)
               ->update([
               'code' =>$request->code,
               'libelle' =>$request->libelle,                 
               'description' =>$request->description,       
               'limitation' =>$request->limitation,
               ]);                   
               
return redirect('/securite')->with('success', 'Profil modifié.');
}

public function privilege($id){
//$auth= Auth::user();
$auth=  auth()->guard('admin')->user();

$privilege = $auth->scopePrivileges('securites');
     
$p= $privilege->visibilite;  
$consultation=$privilege->consultation;
$insertion=$privilege->insertion;
$modification=$privilege->modification;
$suppression=$privilege->suppression;   

     


if($p == 'P') {return view('admin.pasacces'); }

$privilegeusers=Privilege::where('profile_code',$id)->get();

if ( $privilegeusers->isEmpty()){ $privilegecollects=0; } 
else{ $privilegecollects=1; } 

$privilegeuser_enrs= Profile::where('code',$id)->get();
if ($consultation==1) 
  return view('admin.securites.privilege',['privilegeuser'=> $privilegeusers, 'privilegeuser_enr'=>$privilegeuser_enrs,'auth'=> $auth,'consultation'=>$consultation,'insertion'=>$insertion,'modification'=>$modification,'suppression'=>$suppression,'privilegecollect'=>$privilegecollects,'p'=>$p]) ;
else  return view('admin.pasacces');  
}

public function privilegeajout(Request $request){
$data=request()->all();

$this->validate($request,[
  'code'=>'required',
  'visibilite'=>'required',
          ]);
$taches=Tache::all();   

  
foreach($taches as $tache){
          $fam= new Privilege;
          $fam->profile_code =$request->code;
          $fam->volet_app =$tache->tache;
          $fam->description =$tache->description;;
          $fam->consultation =1;
          $fam->insertion =0;
          $fam->modification =0;
          $fam->suppression =0;
          $fam->visibilite =$request->visibilite;

          $fam->save();                 
}              
return back()->with('success', 'Privilège ajouté.');
}
  

    
 
public function privilegeupdate(Request $request){
$data=request()->all();

$this->validate($request,[
  'visibilite'=>'required',
          ]);

if($request->has('consultation')){ $consultation=1;  }else{ $consultation=0;   }       
if($request->has('insertion')){ $insertion=1;  }else{ $insertion=0;   }   
if($request->has('modification')){ $modification=1;  }else{ $modification=0;   }   
if($request->has('suppression')){ $suppression=1;  }else{ $suppression=0;   }    


Privilege::where('profile_code', $request->profile_code)
          ->where('volet_app', $request->volet_app)
          
          ->update([
          'consultation' =>$consultation,
          'insertion' =>$insertion,                 
          'modification' =>$modification,         
          'suppression' =>$suppression,         
          'visibilite' =>$request->visibilite,
          ]);                   
          
return back()->with('success', 'Privilège modifié.');
}


/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function enregistrer(Request $request){

$data=request()->all();
$check= Profile::where('code',$request->code)->get()->count();
if($check <> 0){
      session()->flash('failed', 'Ce  profie existe déjà');
      return back()->with('error_add', 5);
}

$this->validate($request,[
        'code'=>'required',
         'libelle'=>'required',
         'limitation'=>'required',
               ]);

$fam= new Profile;
$fam->code =$request->code;
$fam->libelle =$request->libelle;
$fam->description =$request->description;
$fam->limitation =$request->limitation;

$fam->save();
return back()->with('success', 'Profil ajouté.');
}   

public function destroyfam($id){
      
Privilege::where('code', $id)->delete();  
Profile::where('code', $id)->delete();
return redirect('/securite')->with('success', 'Profil supprimé.');
}   
}


