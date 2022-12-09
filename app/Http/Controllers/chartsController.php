<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Utilisateur;
use App\Models\Opportunite;
use App\Models\Client;
use App\Models\Prospect;
use App\Models\Contact;
use Carbon\Carbon;



class chartsController extends Controller
{
  public function admin(Request $request){
    $user = Utilisateur::find($request->session()->get('user'));
  return view('admin',['user'=>$user]);

}








    public function index(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
        $today = Carbon::now()->todatestring();

        // opportunite*************************************************
        $data = Opportunite::select('id','created_at')->get()->groupBy(function($data)

        {return Carbon::parse($data->created_at)->format('M');});
        $months = [];
        $montho = [];
        foreach($data as $months => $values){
          $months[] = $months;
          $montho[]= count($values);
        }
         $nombreopportunite = Opportunite::select('id')->get();
         $nombreopportunite = count($nombreopportunite);

         $opptoday = Opportunite::select('id','created_at')->where('created_at','=',$today)->get();
         $opptoday = count($opptoday);

        //  produit*************************************************

        $produit = Produit::select('id','created_at')->get()->groupBy(function($data)
      {return Carbon::parse($data->created_at)->format('Y');});
           $yproduit = Produit::select('id','created_at')->where('created_at','=',$today)->get();
           $yproduit = count($yproduit);

           $year = [];
           $yearp = [];
           foreach($produit as $year => $values){
             $year[] = $year;
             $yearp[]= count($values);
            }
            //nombre total produit
          $nombreproduit = Produit::select('id')->get();
          $nombreproduit = count($nombreproduit);

           //nombre total client
          $nombreclient = Client::select('id')->get();
          $nombreclient = count($nombreclient);

          //nombre total contact
          $nombrecontact = Client::select('id')->get();
          $nombrecontact = count($nombrecontact);

          //nombre total prospect
          $nombreprospect = Prospect::select('id')->get();
          $nombreprospect = count($nombreprospect);
        return view('admin', [
            'year' => $year,
            'yeurp' => $yearp,
            'months' => $months,
            'montho' => $montho
            ,
            'nombreopportunite' => $nombreopportunite,
            'nombreclient' => $nombreclient
            ,
            'nobrecontact' => $nombrecontact,
            'nombreprospect' => $nombreprospect
            ,
            'user' => $user
        ]);

        
    }
}
