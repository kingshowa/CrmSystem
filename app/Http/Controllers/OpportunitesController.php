<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;
use Illuminate\Http\Request;

class OpportunitesController extends Controller
{
    public function index(){
    	
        return view('opportunites/opportunites');
    }
    
    public function create(){
    	return view('opportunites.opportunites-add');
    } 
   
    public function store(Request $request){
    	$opportunite = new  Opportunite();
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
        $opportunite->etapes = $request->input('etapes');
    	$opportunite-> date_cloture = $request->input('date_cloture');
        $opportunite-> client = $request->input('client');
        $opportunite-> produits = $request->input('produits');
    	$opportunite->save();
        return redirect('opportunites/opportunites');
    }

    public function details($id){
    	$client = client::find($id);
    	return view('clients.client', ['client'=>$client]);
    }

    public function update(Request $request, $id){
    	$opportunite = Opportunite::find($id);
    	$opportunite = new  Opportunite();
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
        $opportunite->etapes = $request->input('etapes');
    	$opportunite-> date_cloture = $request->input('date_cloture');
        $opportunite-> client = $request->input('client');
        $opportunite-> produits = $request->input('produits');
    	$opportunite->save();
        return redirect('opportunites/opportunites'$id);    	
    }

    public function destroy($id){
    	$client = Article::find($id);
    	$client->delete();
    	return redirect('opportunites');
    }
}