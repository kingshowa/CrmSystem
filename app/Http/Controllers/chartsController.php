<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Rendez;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Utilisateur;
use App\Models\Opportunite;
use App\Models\Client;
use App\Models\Prospect;
use App\Models\Contact;
use App\Models\ProduitOpportunite;
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


               $prix = Produit::join('produit_opportunites', 'produit_opportunites.idProduit', '=', 'produits.id')
               
               ->get()->groupBy(function($prix){return Carbon::parse($prix->created_at)->format('M');});
               
                 
                  $mois = [];
                  $montant = [];
                foreach($prix as $month => $product)
                  {
                    $sum=0;
                 
                    $mois[] = $month;
                 foreach ($product as $p) 
                 {
                   $sum = $sum + ($p->quantite * $p->prix);
                    }
             
                     $montant[]=$sum;
                     
                 
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
    $sum = 0;
                        foreach($produit as $year => $values){
                          $contacth[] = $year;
                          $contactv[]= count($values);
                         }
                   //nombre total produit
          $nombreproduit = ProduitOpportunite::join('produits', 'produit_opportunites.idProduit', '=', 'produits.id')
                                  ->join('opportunites', 'produit_opportunites.idOpportunite', '=', 'opportunites.id')
                                    ->where('etape', 'Gangee')->get();
                      foreach ($nombreproduit as $p) 
                        {
                         $sum = $sum + (double)($p->quantite * $p->prix);
                        }
             
       
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

                 $part = Prospect::select('id')->where('source','partenaire')->get();
                 $part = count($part);

                 $autre = Prospect::select('id')->where('source','autre')->get();
                 $autre = count($autre);

                 $listep = Prospect::select('id')->where('source','listep')->get();
                 $listep = count($listep);


                 $oppPro = Opportunite::where('etape','=','Prospection')->get();
                $oppPro = count($oppPro);

                $oppProp = Opportunite::where('etape','=','Proposition')->get();
                $oppProp = count($oppProp);

                $oppver = Opportunite::where('etape','=','Verification')->get();
                $oppver = count($oppver);

                $oppgann = Opportunite::where('etape','=','Gangee')->get();
                $oppgan = count($oppgann);

                $oppper = Opportunite::where('etape','=','Perdue')->get();
                $oppper = count($oppper);

                $allproduite = Produit::All();
                $allproduit = count($allproduite);
                      

         return view('admin', ['nbrclient'=> $nombreclient,
              'nbrcontact'=>$nombrecontact,'nbrprospect'=>$nombreprospect,'nbrproduit'=>$sum
            ,'mois'=>$mois,'montant'=>$montant,'produit'=>$yproduit,
            'heurs'=>$heurs,'yearp'=>$yearp,'contacth'=>$contacth,
            'contactv'=>$contactv,'web'=>$web,'salon'=>$salon,'bouche'=>$bouche,
            'tel'=>$tel,'autre'=>$autre,'listep'=>$listep,'part'=>$part,'opptoday'=>$opptoday,'oppPro'=>$oppPro,'oppProp'=>$oppProp
          ,'oppver'=>$oppver,'oppgan'=>$oppgan,'oppper'=>$oppper,'allproduit'=>$allproduit]);        
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


    public function commercial(){
      $produit = Produit::select('id','created_at')->get()->groupBy(function($produit)
      {return Carbon::parse($produit->created_at)->format('M');});
      
           $mois = [];
           $value = [];
           foreach($produit as $year => $values){
             $mois[] = $year;
             $value[]= count($values);
            }



            $rendez = Rendez::select('id','created_at')->get()->groupBy(function($rendez)
            {return Carbon::parse($rendez->created_at)->format('M');});
            
                 $rendezs = [];
                 $valeur = [];
                 foreach($rendez as $years => $valeurs){
                   $rendezs[] = $years;
                   $valeur[]= count($valeurs);
                  }

                  $nombrecontact = Contact::select('id') ->whereYear('created_at', date('Y'))->get();
                  $nombrecontact = count($nombrecontact);
      
        return view('commerciale', ['mois' => $mois,'values'=>$value,'rendezs' => $rendezs,'valeur'=>$valeur
                                       ,'nbrcontact'=>$nombrecontact]);

    }
}
