<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    //
    public function index(){
        $listproduits=Produit::all();
    	
        return view('produits/produit-view',['produits'=> $listproduits]);
    }
    
    public function create(){
    	return view('produits/produit-add');
    } 
   
    public function store(Request $request){
    	$produit = new  Produit();
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('Quantites');
    	
    	$produit->save();
        return redirect('produits');
    }

    public function edite($id){
    	$produit = Produit::find($id);
    	return view('produits/produits', ['produit'=>$produit]);
    }

    public function update(Request $request, $id){
    	$produit = Produit::find($id);
    	$produit = new  Produit();
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantite = $request->input('Quantite');
    	$produit->photo = $request->input('Photo');
    	$client->save();
        return redirect('produits');    	
    }

    public function destroy($id){
    	$produit = Produit::find($id);
    	$produit->delete();
    	return redirect('produits');
    } 
}
