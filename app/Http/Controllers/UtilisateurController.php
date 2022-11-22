<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    //
    public function index(){
        $listutilisateurs=Utilisateur::all();
    	
        return view('utilisateurs/utilisateur-view',['utilisateurs'=> $listutilisateurs]);
    }
    
    public function create(){
    	return view('produits.produit-add');
    } 
   
    public function store(Request $request){
    	$utilisateur = new  Produit();
    	$utilisateur->nom = $request->input('nom');
    	$utilisateur->prix = $request->input('prix');
        $utilisateur->quantite = $request->input('quantite');
    	$utilisateur->photo = $request->input('photo');
    	$utilisateur->save();
        return redirect('produits');
    }

    public function edite($id){
    	$client = Utilisateur::find($id);
    	return view('produits.produit-view', ['produit'=>$produit]);
    }

    public function update(Request $request, $id){
    	$client = Client::find($id);
    	$utilisateur = new  Utilisateur();
    	$utilisateur->nom = $request->input('nom');
    	$utilisateur->prix = $request->input('prix');
        $utilisateur->quantite = $request->input('quantite');
    	$utilisateur->photo = $request->input('photo');
    	$client->save();
        return redirect('utilisateurs');    	
    }

    public function destroy($id){
        $utilisateur->delete();
    	$utilisateur = Utilisateur::find($id);
    	return redirect('utilisateurs');
    } 
}