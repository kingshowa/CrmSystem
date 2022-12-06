<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;


class OpportuniteController extends Controller
{
    public function index(){
    	$listopportunites = Opportunite::all();
        return view('opportunites/opportunites', ['opportunites' => $listopportunites]);
        //return view('opportunites/opportunites');
    }
    
    public function create(){
    	return view('opportunites.opportunites-add');
    } 
   
    public function store_opportunite(Request $request){
    	$opportunite = new  Opportunite();
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
    	$opportunite-> date_cloture = $request->input('date_cloture');
        $opportunite-> client = $request->input('client');
        $opportunite-> produits = $request->input('produits');
    	$opportunite->save();
        return redirect('opportunites');
    }

    public function details($id){
    	$opportunite = Opportunite::find($id);
        $produit = Produit::where('opportunite',$opportunite->nom)->get();
    	return view('opportunites.opportunite', ['opportunite'=>$opportunite,'produits'=>$produit]);
    	//return view('opportunites.opportunite', ['opportunite'=>$opportunite]);
    }

    /*public function details($id){
    	$client = client::find($id);
    	return view('clients.client', ['client'=>$client]);
    }*/

    public function update(Request $request, $id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
    	$opportunite->date_cloture = $request->input('date_cloture');
        $opportunite->client = $request->input('client');
        $opportunite->produits = $request->input('produits');
    	$opportunite->save();
        return back();
        //return redirect('opportunite/'.$id);	
    }

    // details de l'opportunites edité par le produit
    public function update_by_produit(Request $request, $id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->nom = $opportunite->nom;
    	$opportunite->montant = $request->input('montant');
        $opportunite->date_cloture = $request->input('date_cloture');
    	$opportunite-> client = $request->input('client');
        $opportunite-> produits = $request->input('produits');
    	$opportunite->save();
        return back();    	
    }


    public function destroy($id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->delete();
    	return redirect('opportunites');
    }
}
