<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;

use App\Models\Utilisateur;
use App\Models\Opportunite;

 session_start();

class ProduitController extends Controller
{
    
   
    
    public function index(Request $request){

        $listproduits=Produit::all();
        if($request->has('deleted'))
        {
            $listproduits=Produit::onlyTrashed()->get();
        }
       
        return view('produits/produit-view',['produits'=> $listproduits]);
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('produits/produit-add',['user' => $user]);
    } 
   
    public function create2(Request $request,$id){
        $opportunite= Opportunite::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
        
    	return view('produits.produit-add2', ['opportunite' => $opportunite,'user' => $user]);
    } 
   /* public function store_produit(Request $request){*/
    public function store(Request $request){
    	$produit = new  Produit();
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('quantitie');
        $c = $request->input('type');
        if ($c == "radio1") {
            $produit->type = 'Auto';}
        else {
            $produit->type = 'Manual';}
       
        $produit->desc = $request->input('desc');


       
        

         $filenameWithExt = $request->file("photo")->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension=$request->file("photo")->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file("photo")->storeas('public/images', $filenametostore);
        $produit->Photo = $filenametostore;
        

    	
    	$produit->save();
        session()->flash('succes','Produit ajouter avec success');
        return redirect('produits');
    }

    public function edite(Request $request,$id, $action){
    	$produit = Produit::find($id);

        $user = Utilisateur::find($request->session()->get('user'));
    	return view('produits/produits', ['produit'=>$produit,'user'=>$user], ['action'=>$action]);


    	//return view('produits/produits', ['produit'=>$produit]);
        

    }
    
    	
    
    // public function editee($id){
    // 	$produit = Produit::find($id);
    // 	return view('produits/produits-edit', ['produit'=>$produit]);
    // }

    public function update(Request $request, $id){
    	$produit = Produit::find($id);
    	
    	$produit->nom = $request->input('Nom');
    	$produit->prix = $request->input('Prix');
        $produit->quantitie = $request->input('quantitie');
        $produit->quantitie = $request->input('type');
        $produit->quantitie = $request->input('desc');
    	//$produit->photo = $request->input('Photo');
    	$produit->save();
        return back();    	
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
    	return back()->with('delete','Produit Delete successfully');
    } 

    public function restore($id){
    	Produit::withTrashed()->find($id)->restore();
    	
    	return back()->with('restore','Produit Restore successfully');
       
    } 

    public function restore_all(){
    	Produit::withTrashed()->restore();
    	
    	return redirect('produits');
       
    } 

    public function bookEdit ($id){
        $produitData = Produit::find($id);
        return response()->json([
           'status' =>200,
           'produitdata' =>$produitData,
       ]);
   }

   public function carview($id){
    $produit = Produit::find($id);

    
    return view('front-office/carview', ['produit'=>$produit]);
    

}
}
?>
