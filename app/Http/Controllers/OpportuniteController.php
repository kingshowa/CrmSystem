<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;

use App\Models\Utilisateur;

use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;

class OpportuniteController extends Controller
{
    public function index(Request $request){
    	$listOpportunites = Opportunite::all();
        $user = Utilisateur::find($request->session()->get('user'));
        return view('opportunites/opportunites', ['opportunites' => $listOpportunites]);
        //return view('opportunites/opportunites');
    }

    public function create(Request $request)
    {
        $user = Utilisateur::find($request->session()->get('user'));
        return view('opportunites.opportunites-add', ['user' => $user]);
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
        session()->flash('succes','client ajouter avec success');
        return redirect('opportunites');
    }


   

    public function details(Request $request,$id, $action){
    	$opportunite = Opportunite::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('opportunites.opportunite', ['opportunite'=>$opportunite,'user'=>$user], ['action'=>$action]);

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
