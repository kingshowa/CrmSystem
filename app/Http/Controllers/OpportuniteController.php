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
    }
    
    public function create(){
        $client= Client::all();
    	return view('opportunites.opportunites-add',['clients'=>$client]);
    } 
   public function create2(){
        $client= Client::all();
    	return view('opportunites.opportunite',['clients'=>$client]);
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

    public function details($id, $action){
    	$opportunite = Opportunite::find($id);
    	return view('opportunites.opportunite', ['opportunite'=>$opportunite], ['action'=>$action]);
    }




    public function update(Request $request, $id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->nom = $request->input('nom');
    	$opportunite->montant = $request->input('montant');
    	$opportunite->date_cloture = $request->input('date_cloture');
    	$opportunite->save();
        return back();
    }


    public function destroy($id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->delete();
    	return redirect('opportunites');
    }
}
