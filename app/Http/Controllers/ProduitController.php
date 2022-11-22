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
    	return view('produits.produit-add');
    } 
   
    public function store(Request $request){
    	$produit = new  Produit();
    	$produit->nom = $request->input('nom');
    	$produit->prix = $request->input('prix');
        $produit->quantite = $request->input('quantite');
    	$produit->photo = $request->input('photo');
    	$produit->save();
        return redirect('produits');
    }

    public function edite($id){
    	$client = Produit::find($id);
    	return view('produits.produit-view', ['produit'=>$produit]);
    }

    public function update(Request $request, $id){
    	$produit = Produit::find($id);
    	$produit = new  Produit();
    	$produit->nom = $request->input('nom');
    	$produit->prix = $request->input('prix');
        $produit->quantite = $request->input('quantite');
    	$produit->photo = $request->input('photo');
    	$client->save();
        return redirect('clients');    	
    }

    public function destroy($id){
    	$produit = Produit::find($id);
    	$produit->delete();
    	return redirect('produits');
    } 
}
