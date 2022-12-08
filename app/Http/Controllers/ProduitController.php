<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Opportunite;

class ProduitController extends Controller
{
    
    public function index(){
        $listproduits=Produit::all();
    	
        return view('produits/produit-view',['produits'=> $listproduits]);
    }
    
    public function create(){
    	return view('produits/produit-add');
    } 
   
    public function create2($id){
        $opportunite= Opportunite::find($id);
        
    	return view('produits.produit-add2', ['opportunite' => $opportunite]);
    } 
   /* public function store_produit(Request $request){*/
    public function store(Request $request){
    	$produit = new  Produit();
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('quantitie');


       
        

         $file = $request->file("Photo");
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('public/images/', $filename);
         //$file->move(public_path('images'), $filename);
        // $path = $request->file('photo')->storeAs('public/images', $filename);
         $produit->photo =$file ;

        //Produit::create([
           // 'photo' => $filename,
        //]);
    	
    	$produit->save();
        return redirect('produits');
    }

    public function edite($id){
    	$produit = Produit::find($id);
    	return view('produits/produits', ['produit'=>$produit]);
    }

    public function update(Request $request, $id){
    	$produit = Produit::find($id);
    	
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('quantitie');
    	//$produit->photo = $request->input('Photo');
    	$produit->save();
        return redirect('produit/'.$id);    	
    }


    public function update_by_produit(Request $request, $id){
    	$produit = Produit::find($id);
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('quantitie');
    	$produit->opportunite = $produit->opportunite;
    	$produit->save();
        return back();    	
    }


    public function destroy($id){
    	$produit = Produit::find($id);
    	$produit->delete();
    	return redirect('produits');
    } 
}
