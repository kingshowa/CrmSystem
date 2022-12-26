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

  session_start();

class chartsController extends Controller
{
  //  public function route(Request $request){
  //    $user = Utilisateur::find($request->session()->get('user'));
  //   return view('admin',['user'=>$user]);
  // }








    public function admin(){
      
        $today = Carbon::today()->todatestring();

               // opportunite*************************************************
               $data = Produit::select('id','created_at')->get()->groupBy(function($data)
       
               {return Carbon::parse($data->created_at)->format('M');});
               $months = [];
               $montho = [];
               foreach($data as $month => $values){
                 $months[] = $month;
                 $montho[]= count($values);
               }
                $nombreopportunite = Opportunite::select('id')->get();
                $nombreopportunite = count($nombreopportunite);
       
                $opptoday = Opportunite::select('id','created_at')->where('created_at','=',$today)->get();
                $opptoday = count($opptoday);
       
               //  produit*************************************************
       
               $produit = Produit::select('id','created_at')->get()->groupBy(function($produit)
             {return Carbon::parse($produit->created_at)->format('H');});
                  $a = Produit::select('id','created_at')->where('created_at','=',$today)->get();
                  $yproduit = count($a);
       
                  $heurs = [];
                  $yearp = [];
                  foreach($produit as $year => $values){
                    $heurs[] = $year;
                    $yearp[]= count($values);
                   }


                   $contact = Contact::select('id','created_at')->get()->groupBy(function($contact)
                   {return Carbon::parse($contact->created_at)->format('H');});
                        $contacth = [];
                        $contactv = [];
                        foreach($produit as $year => $values){
                          $contacth[] = $year;
                          $contactv[]= count($values);
                         }
                   //nombre total produit
                 $nombreproduit = Produit::all();
                 $nombreproduit = count($nombreproduit);
       
                  //nombre total client
                 $nombreclient = Client::select('id')->get();
                 $nombreclient = count($nombreclient);
       
                 //nombre total contact
                 $nombrecontact = Contact::select('id')->get();
                 $nombrecontact = count($nombrecontact);
       
                 //nombre total prospect
                 $nombreprospect = Prospect::select('id')->get();
                 $nombreprospect = count($nombreprospect);


                 $web = Prospect::select('id')->where('source','web')->get();
                 $web = count($web);
                 $salon = Prospect::select('id')->where('source','salon')->get();
                 $salon = count($salon);
                 $bouche = Prospect::select('id')->where('source','bouche_a_oreille')->get();
                 $bouche = count($bouche);
                 $tel = Prospect::select('id')->where('source','telephone')->get();
                 $tel = count($tel);
                      

         return view('admin', ['nbrclient'=> $nombreclient,
              'nbrcontact'=>$nombrecontact,'nbrprospect'=>$nombreprospect,'nbrproduit'=>$nombreproduit
            ,'months'=>$months,'montho'=>$montho,'produit'=>$yproduit,
            'heurs'=>$heurs,'yearp'=>$yearp,'contacth'=>$contacth,
            'contactv'=>$contactv,'web'=>$web,'salon'=>$salon,'bouche'=>$bouche,
            'tel'=>$tel,'opptoday'=>$opptoday]);
          
            
        

        
    }
    public function front(){
      $today = Carbon::today()->todatestring();
     
      $produit = Produit::orderBy('id', 'asc')->limit(3)->get();
   
    return view('front-office.index',['produit'=>$produit]);
      
    }
    public function showcar(){
      $produit = Produit::simplepaginate(6);
    return view('front-office.cars', ['produits' => $produit]);

    }
    public function showteam(){
      $utilisateur = Utilisateur::where('role','=','admin')
      -> simplepaginate(6);
    return view('front-office.team', ['utilisateurs' => $utilisateur]);

    }
}
