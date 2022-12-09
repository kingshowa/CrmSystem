<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Opportunite;
use App\Models\Utilisateur;

class OpportuniteController extends Controller
{
    public function index(Request $request){
    	$listOpportunites = Opportunite::all();
        $user = Utilisateur::find($request->session()->get('user'));
        return view('opportunites/opportunites', ['opportunites' => $listOpportunites,'user'=>$user]);
        //return view('opportunites/opportunites');
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('opportunites.opportunites-add',['user'=>$user]);
    } 
   
    public function store_opportunite(Request $request){
    	$opportunite = new  Opportunite();
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
        $opportunite->etapes = $request->input('etapes');
    	$opportunite-> date_cloture = $request->input('date_cloture');
        $opportunite-> client = $request->input('client');
        $opportunite-> produits = $request->input('produits');
    	$opportunite->save();
        return redirect('opportunites');
    }

    public function details(Request $request,$id){
    	$opportunite = Opportunite::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('opportunites.opportunite', ['opportunite'=>$opportunite,'user'=>$user]);
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
        return redirect('opportunite/'.$id);  	
    }

    public function destroy($id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->delete();
    	return redirect('opportunites');
    }
}
