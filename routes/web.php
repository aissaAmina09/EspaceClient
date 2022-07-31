<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('routes',function(){
\Artisan::call('route:list');
return "<pre>". \Artisan::output();
});
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
   /* Route::get('/', function () {
        return view('index');
    });*/
	Route::get('rr',function(){
            $ip = Request::ip();
            return view('welcome', compact('ip'));
        });
});
//Auth::routes();
/************************************************************************************ Route Partie Web *** **********************************************************************  */
Route::get('/countrystate', 'Wilayacommune@index');
Route::get('getstatelist', 'Wilayacommune@getStates');

Route::get('getstatelistInscription', 'Wilayacommune@getstatelistInscription');
Route::get('getstructurelist', 'Wilayacommune@getstructurelist');
/**************Partie Web client  */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/log', 'HomeController@show')->name('index');
Route::get('/création', 'Auth\RegisterController@show')->name('index');
Route::post('/register', 'Auth\RegisterController@store')->name('register.store');
//Route::post('/registerClient', 'Auth\RegisterController@storeee')->name('register.store');
Route::match(['get','post'],'/registerClient','Auth\RegisterController@storeee')->name('register_Client');
Route::get('validation/{user}/{token}','Auth\RegisterController@validation');
Route::post('login-user','UsersController@login');
Route::get('/Compte','CompteController@index')->name('compte');
Route::get('/logout-compte','UsersController@logout')->name('logout-compte');
Route::post('/saveBon','BBClientController@store');
Route::get('/showPDF/{id}','BBClientController@showPDF')->name('boncom.showPDF');
Route::get('/documentsigneEnvoyer/{id}','BBClientController@documentsigneEnvoyer')->name('documentsigneEnvoyer');
Route::get('/DetaillProjet/{code}','BBClientController@DetaillProjet')->name('DetaillProjet');
Route::get('/DetaillProjetd/{code}','BBClientController@DetaillProjet')->name('DetaillProjet');

//Route::get('/chargerdocument','BBClientController@chargerdocument')->name('boncom.chargerdocument');
Route::get('/chargerdocument/{code}','BBClientController@chargerdocument')->name('boncom.chargerdocument');
Route::post('/uploadsigne/{code}','BBClientController@uploadsigne')->name('uploadsigne');
Route::post('/uploadocscanné/{code}','b_bordereauxController@uploadocscanné')->name('uploadocscanné');
Route::post('/uppload/{code}','b_bordereauxController@uppload')->name('uppload');


Route::get('/showsigne/{id}','BBClientController@showsigne')->name('showsigne');
Route::get('/ajouter_bon_new','CompteController@ajouter_bon_new');
Route::get('/ajouter_bon','CompteController@ajouter_bon');
Route::get('/list_bbcommandeClient','BBClientController@display')->name('list_bbcommandeClient');//new design
Route::get('/createBonCommande','BBClientController@create')->name('createBonCommande');//new design

Route::get('createBonCommandnew',function(){
   
    return view('front.compte.BonDeCommande.DetailProjetn');
})->name('createBonCommandnew');

Route::get('/createBonCommande','BBClientController@createBonCommanden')->name('createBonCommanden');//new design
Route::get('/list_BureauEtudeClient','BBClientController@BureauEtude');
Route::get('/profile-client', 'UsersController@profile');
Route::post('/modifiableclient/{id}','UsersController@modifiableclient');
/*********dossier architecture */
Route::get('/DossierArchitecture/{id}', 'BBClientController@DossierArchitecture')->name('DossierArchitecture');
Route::get('/Dossiergeniecivil/{id}', 'BBClientController@Dossiergeniecivil')->name('Dossiergeniecivil');
/*************Reclamation client */
Route::get('/reclamation', 'ReclamationController@index')->name('reclamation');
Route::get('/ajouter_reclamation', 'ReclamationController@create')->name('ajouter_reclamation');
Route::post('/store_reclamation', 'ReclamationController@store')->name('store_reclamation');
Route::get('/show_reclamation/{id}', 'ReclamationController@show')->name('show_reclamation');
Route::get('/send_reclamation', 'ReclamationController@send_reclamation')->name('send_reclamation');
Route::get('/boite_Reception', 'ReclamationController@boite_Reception')->name('boite_Reception');
/************Vues */
///****** RECEVABILITE DU DOSSIER
Route::get('/NonRecevable', 'Vues\DossierNonRecevableController@index')->name('NonRecevable');
Route::post('/filterEncours', 'Vues\DossierNonRecevableController@filterEncours')->name('filterEncours');
Route::post('/filterNonrecevable', 'Vues\DossierNonRecevableController@filterNonrecevable')->name('filterNonrecevable');
Route::get('/Encours', 'Vues\DossierNonRecevableController@Encours')->name('Encours');
///******  END RECEVABILITE DU DOSSIER
/***** TRAITEMENT DES DOSSIERS RECEVABLES */
Route::get('/EXAMINES', 'Vues\EXAMINESController@index')->name('EXAMINES');
Route::post('/filterEXAMINES', 'Vues\EXAMINESController@filterEXAMINES')->name('filterEXAMINES');
Route::get('/Traitement', 'Vues\EXAMINESController@Traitement')->name('Traitement');
Route::post('/filterTraitement', 'Vues\EXAMINESController@filterTraitement')->name('filterTraitement');
/***** End TRAITEMENT DES DOSSIERS RECEVABLES */
///****** CONTRÔLE CHANTIER
Route::get('/NONDEMARRES', 'Vues\NONDEMARRESController@index')->name('NONDEMARRES');
Route::get('/Projet_Arret', 'Vues\ProjetArretController@index')->name('Projet_Arret');
Route::get('/ProjetEnCours', 'Vues\ProjetEnCoursController@index')->name('ProjetEnCours');
/***** End TRAITEMENT DES BORDERAUX */
Route::get('/Details_bordereaux/{param1}/{param2}', 'b_bordereauxController@show')->name('Details_bordereaux');
Route::get('/create_bordereau/{id}', 'b_bordereauxController@create_bordereau')->name('create_bordereau');
Route::post('/upload/{id}', 'b_bordereauxController@uploabordereau')->name('uploabordereau');
Route::get('getimages','b_bordereauxController@getImages');

Route::post('imageDelete','b_bordereauxController@destroy')->name('imageDelete'); 

/***********end vues */
Route::match(['get','post'],'/admin','admin\AdminController@login')->name('admin.login');
/************************************************************************************ Route Partie Admin *** **********************************************************************  */
Route::get('outlets', 'OutletController@index')->name('outlets.index');
    Route::group(['middleware' => 'auth.admin'], function () {
                                                             Route::group(['namespace'=>'admin'],function(){
                                                                                                           Route::get('/admin/Dashboard','AdminController@Dashboard')->name('admin.Dashboard');
                                                                                                           Route::get('/logout','AdminController@logout');
                                                                                                           Route::get('/adminn','AdminController@index')->name('admin');
                                                                                                           Route::get('/liste_user', 'BusersController@index');
                                                                                                           Route::get('/filteradvancedBUseres','BusersController@filteradvancedBUseres')->name('filteradvancedBUseres');
                                                                                                           Route::get('/ajouter_Busers', 'BusersController@ajouter_Busers');
                                                                                                           Route::match(['get','post'],'/register-buser', 'BusersController@store')->name('ajouter_Busers');
                                                                                                           Route::get('/bbureau', 'BbureauEtudeController@index');
                                                                                                           Route::get('/BMaitre_ouvrage', 'BMaitreOuvrageController@index');
                                                                                                           Route::get('/filteradvancedClient', 'BusersController@filteradvancedClient');
                                                                                                           Route::get('/filterBMaitre_ouvrage', 'BMaitreOuvrageController@filterBMaitre_ouvrage');
                                                                                                           Route::get('/filteradvancedbbureau', 'BbureauEtudeController@filteradvancedbbureau');
                                                                                                           Route::get('/profile', 'BusersController@profile');
                                                                                                           Route::get('/List-Partenaires', 'BusersController@index')->name('List-Partenaires');
                                                                                                           Route::post('/modifiableuser/{id}','BusersController@editutilisateur');
                                                                                                           Route::get('/deleteusers/{Matricule}', 'BusersController@destroy');
                                                                                                           Route::get('/modifeusers/{Matricule}', 'BusersController@modifeusers');
                                                                                                           Route::post('/modiff/{Matricule}', 'BusersController@modiff');
                                                                                                           Route::get('/filteradvancedClientB', 'BusersController@filteradvancedClientB');
                                                                                                           Route::get('/active/{id}', 'BusersController@active');
                                                                                                           Route::get('/desactive/{id}', 'BusersController@desactive');
                                                                                                         //  Route::get('/showPDF/{id}','BBcommandeController@showPDF')->name('boncom.showPDF');
                                                                                                         Route::get('/showBon/{id}','BBcommandeController@show')->name('boncom.show');
                                                                                                         Route::get('/filteradvancedBCC', 'BBcommandeController@filteradvancedBCC');
                                                                                                         Route::get('/filteradvancedBC', 'BBcommandeController@filteradvancedBC');
                                                                                                           Route::get('/Bcommande', 'BBcommandeController@index');
                                                                                                           Route::get('/DetaillProjet_Admin/{code}', 'BBcommandeController@DetaillProjet_Admin')->name('DetaillProjet_Admin');
                                                                                                           
                                                                                                           Route::get('/NotificationsBC', 'NotificationController@index');
                                                                                                           Route::get('/NotificationsBCC', 'NotificationController@indexBBC');
                                                                                                           Route::get('/Affaires', 'AffaireController@index')->name('Affaires');
                                                                                                           Route::get('/maitredouvrage', 'BMaitreOuvrageController@index')->name('Affaires');
                                                                                                           Route::post('/filterMaitreOuvrage', 'BMaitreOuvrageController@filterMaitreOuvrage')->name('filterMaitreOuvrage');
                                                                                                           Route::post('/storeMaitreOuvrage', 'BMaitreOuvrageController@store')->name('storeMaitreOuvrage');
                                                                                                           /**affectaion affaire */
                                                                                                           Route::get('/Renseiegnement_Affaire', 'AffairesController@Renseiegnement_Affaire')->name('Renseiegnement_Affaire');
                                                                                                           Route::post('/affectaion_affaire', 'AffairesController@affectaion_affaire')->name('affectaion_affaire');
                                                                                                           Route::get('/reclamation_admin', 'ReclamationController@index')->name('reclamation_admin');
                                                                                                           /***Sécurité privillege */
                                                                                                           Route::get('/securité', 'SecuriteController@index')->name('securité');
                                                                                                           Route::post('/securite/store', 'securiteController@enregistrer')->name('securitestore');
                                                                                                           Route::post('/securite/update', 'securiteController@update')->name('securiteupdate');
                                                                                                           Route::get('/securite/delete/{id}', 'securiteController@destroyfam')->name('securite-delete');
                                                                                                           Route::get('/securite/privilege/{id}', 'securiteController@privilege')->name('securite-privilege');
                                                                                                           Route::post('/securite/privilegeupdate', 'securiteController@privilegeupdate')->name('securite-privilegeupdate');
                                                                                                           Route::post('/securite/privilegeajout', 'securiteController@privilegeajout')->name('securite-privilegeajout');
                                                                                                           Route::get('/gestion_busers', 'BusersController@gestion_busers')->name('gestion_busers');
                                                                                                           Route::get('/getstatelist', 'BagencesController@getStates');
                                                                                                           Route::get('/ajax-subcatfront', 'BagencesController@subcatfront');
                                                                                                           Route::get('/create_bbc', 'BBcommandeController@create')->name('create_bbc');
                                                                                                           
                                                                                                           
                                                                                                           
          Route::get('/xxx', function () {
        return view('admin.static
        ');
    }); Route::get('/Privillège', function () {
        return 'page en production .....';
    });
    Route::get('/xxx', function () {
        return view('admin.static
        ');
    });
                                                                                                                  Route::get('/33', 'UsersController@index');
});});
/************RECEVABILITE DU DOSSIER************* */
/************ Fin RECEVABILITE DU DOSSIER************* */
/**************Partie test aléatoire ********************************************/
//Route::get('/logout','AdminController@logout');
//Route::get('/filteradvancedClient', 'UsersController@filteradvancedClient');
Route::get('/33', 'UsersController@index');
Route::get('/creatt', function () {
    return view('creatt
    ');
});
Route::get('/dd', function () {
    $title = 'Bon de commande';
   return  $subcategories =App\Taffaire::chunk(100, function($posts){
       foreach ($posts as $post){
       }
   });
    return view('front.aissa', ['title'=>$title]);
});
Route::get('/map', function () {
    $title = 'Bon de commande';
    return view('map', ['title'=>$title]);
});
use App\Buser;
Route::get('/aa', 'admin\AdminController@aa');
Route::get('/notify', function () {
    $notifications = auth()->user()->unreadNotifications;
    dd( $notifications);
    $admins  = Buser::where('role_id','=','1')->get();
     $details = [
             'greeting' => 'Hi Artisan',
             'body' => 'This is our example notification tutorial',
             'thanks' => 'Thank you for visiting codechief.org!',
     ];
     foreach ($admins as $user) {
     //   $users->each->notify(new \App\Notifications\NouveauxClients($details));
     $user->notify(new \App\Notifications\NouveauxClients($details));
    }
     return dd("Done");
 });
 Route::get('/ ajax-subcatNatureDoc' ,function(){
    $cat_id=Input::get('cat_id');
    $subcategories =Bcommune::where('codewilaya','=',$cat_id)->get();
    return Response::json($subcategories);
      });
      Route::get('/echart', 'admin\chartController@index');
      Route::get('/', function () {
        return view('index');
    });
    Route::get('/testeweb', function () {
        return view('testeweb');
    });
    Route::get('/tab', function () {
        return view('tab');
    });
    Route::get('/teste-imprime', function () {
        return view('front.compte.teste-imprime');
    });
    /****teste globale */
    Route::get('/page', function () {
        return view('admin.pageG');
    });
    Route::get('/chart', function () {
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
        $titlee="Réclamation";
        return view('admin.echartOld',$data, $databc);
        });