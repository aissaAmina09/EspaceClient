<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Session;
use App\Admin;use DB;
use Redirect;use Carbon\Carbon;
use App\User;
use App\B_bcommande;
use App\Taffaire;
class AdminController extends Controller
{
    //
    public function aa()
    {
       // $notifications= DB::table('notifications')->get();
        $notifications =  DB::table('notifications')
        ->where('type', 'App\Notifications\NouveauxClients')
        ->count();
       // dd($notifications);
            return view('users.notification.index' , compact("notifications"));
     
        
        return view('admin.dashboard',compact('notifi'));
    }

    public function __construct(){
    //  $this->middleware('auth:admin');

    }

    
    public function login(Request $request){
     if($request->isMethod('post')){
          $data=$request->input(); //dd($data);
          //return $a=Carbon::now()->format("Y-m-d H:i:s");
          if(Auth::guard('admin')->attempt(['Matricule'=>$data['Matricule'],'password'=>$data['password']])){

            return redirect('admin/Dashboard');
            

          }else{
            return Redirect::back()->withErrors(['error' => '
            
            Saisissez un nom d \' utilisateur et un mot de passe valides.']);
            
          }

     }


        return view('admin.admin_login');
    }



    public function dashboard(){

 /****** afficher les nbr user par wilaya   ******/

 $user = Auth::guard('admin')->user();
 $wilaya = '%'.$user->Structure.'%';
 $str = substr($wilaya, 1,2);
 $wila = '%'.$str.'%';
 
        $static2 = DB::select("SELECT count(*) as nombre ,wilaya ,nom_wilaya FROM [espace_client2].[dbo].users as u 
        inner join bwilayas as b
        on u.wilaya =b.CODE_Wilaya 
        
        
        
        group by wilaya,nom_wilaya ");
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $data = [];
     
        
     foreach($static2 as $row) {
            $data['label'][] = $row->nom_wilaya;
            $data['data'][] = (int) $row->nombre;
          }
        $data['chart_data'] = json_encode($data);

       
        /****** afficher les nbr BBC par wilaya   ******/
        
        $staticBC = DB::select("SELECT count(*) as nombre ,wilaya ,nom_wilaya FROM [espace_client2].[dbo].users as u 
        inner join bwilayas as b
        on u.wilaya =b.CODE_Wilaya 
        group by wilaya,nom_wilaya ");
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $databc = [];
     
        
     foreach($staticBC as $row) {
            $databc['label'][] = $row->nom_wilaya;
            $databc['data'][] = (int) $row->nombre;
          }
        $databc['chart_data'] = json_encode($databc);
        $titlee="Tableau de bord";
         $countPartenaire=User::count();
         $countbbc=B_bcommande::count();
         $countAffaire=Taffaire::count();
         $listepartenaires=User::take(5)->orderby('created_at','desc')->get();
       // return view('admin.echart',['data'=>$data],['databc'=>$databc] ,['countPartenaire'=>$countPartenaire],['titlee'=>$titlee]);
       //affichée les cordonnées sur le map 
          $outlet = DB::table("b_bcommandes")->select("latitude","longitude","intitule_proj")->get();
        /*$outlet = $markers->map(function ($item, $key){
            return [ $item->latitude, $item->longitude];
        });*/
         //return $outlet[0];
  
   //  return view('admin.echart')->with('outlet', $outlet) ->with('countPartenaire', $countPartenaire) ->with('countbbc', $countbbc);
     return view('admin.dashboardn')->with('outlet', $outlet)->with('countPartenaire', $countPartenaire)
     ->with('countbbc', $countbbc)->with('countAffaire', $countAffaire)->with('listepartenaires',$listepartenaires);
       
       // return view('admin.echartOld',$data, $databc);
        



    }

    public function logout(){

Session::flush();
return redirect('/admin');


    }
    public function index (){

        return 'hhhh';
    }
}
