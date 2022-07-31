<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Taffaire;
use Datatables;
use DB;


class AffaireController extends Controller
{
    //
    public function index(){
       
          $affaires=DB::table('Taffaire')->select('*');
          return datatables()->of($affaires)
          ->make(true);
       // return view('admin.Taffaire.index',compact('affaires'),compact('title'));    
    }
}
