<?php

namespace App\Http\Controllers;

use App\Models\Opportunite;

use App\Models\Utilisateur;
use App\Models\ProduitOpportunite;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;

//session_start();


use Illuminate\Support\Facades\DB;

class OpportuniteController extends Controller
{
    public function index(Request $request){
    	$listOpportunites = Opportunite::all();
        $user = Utilisateur::find($request->session()->get('user'));
        return view('opportunites/opportunites', ['opportunites' => $listOpportunites,'user'=>$user]);
        //return view('opportunites/opportunites');

        return view('opportunites/opportunites', ['opportunites' => $listOpportunites]);
    }

    public function create(Request $request)
    {
        $clients = Client::orderBy('societe')->get();
        $user = Utilisateur::find($request->session()->get('user'));
        return view('opportunites.opportunites-add', ['user' => $user,'clients'=>$clients]);

        
        $societe= Client::all();
        return view('opportunites.opportunites-add', ['user' => $user], ['clients'=>$societe]);
    }


    private $ID;
    public function create_prod(Request $request, $id)
    {
        $user = Utilisateur::find($request->session()->get('user'));

        $this->ID=$id;
        $products= DB::table("produits")->select('*')->whereNOTIn('id',function($query){
            $query->select('idProduit')->from('produit_opportunites')->where('idOpportunite', $this->ID);
        })->get();
        
        return view('opportunites.opp-product', ['user' => $user], ['products'=>$products, 'oppId'=>$id]);
    }

    public function create_prod_edit(Request $request, $idPO, $idOpp)
    {
        $user = Utilisateur::find($request->session()->get('user'));
        
        $product = Produit::join('produit_opportunites', 'produits.id', '=', 'produit_opportunites.idProduit')
        ->where('produit_opportunites.id', $idPO)->where('idOpportunite', $idOpp)->get();
        //echo $product;
        return view('opportunites.opp-product-edit', ['user' => $user], ['product'=>$product]);
    }
    
    public function store_opportunite(Request $request){
    	$opportunite = new  Opportunite();
    	$opportunite->nom = $request->input('nom');
        $opportunite->etape = $request->input('etapes');
    	$opportunite->date_cloture = $request->input('date_cloture');
        $opportunite->clientID = $request->input('client');
        $opportunite->client = Client::where('id',$request->input('client'))->first()->societe;
    	$opportunite->save();
        session()->flash('succes','client ajouter avec success');
        return redirect('opportunites');
    }

    public function store_opp_product(Request $request, $id){
    	$oppProduct = new  ProduitOpportunite();
    	$oppProduct->idProduit = $request->input('product');
        $oppProduct->idOpportunite = $id;
    	$oppProduct->quantite = $request->input('quantity');
    	$oppProduct->save();
        
        return redirect('opportunite/'.$id.'/1');
    }

    //Function to calculate the total amount of the opportunity
   public function fnAmt($id){
        $products = ProduitOpportunite::join('produits', 'produits.id', '=', 'produit_opportunites.idProduit')
        ->where('idOpportunite', $id)->get();
        $sum=0;
        foreach($products as $product){
            $sum=$sum+($product->prix * $product->quantite);
        }
        return $sum;
    }

    public function details(Request $request,$id, $action){
    	$opportunite = Opportunite::find($id);
        $products = Produit::join('produit_opportunites', 'produits.id', '=', 'produit_opportunites.idProduit')->where('idOpportunite', $id)->get();
        $amount = $this->fnAmt($id);
         //echo $products;
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('opportunites.opportunite', ['opportunite'=>$opportunite,'user'=>$user ,'action'=>$action, 'amount'=>$amount, 'products'=>$products]);

    }
    

    public function update(Request $request, $id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->nom = $request->input('nom');
    	$opportunite->etape = $request->input('etapes');
    	$opportunite->date_cloture = $request->input('date_cloture');
    	$opportunite->save();
        return back();
    }

    public function updateOP(Request $request, $idPO, $idOpp){
        DB::update('UPDATE produit_opportunites set quantite = ? WHERE id = ?', [$request->input('quantity'), $idPO]);
        return redirect('opportunite/'.$idOpp.'/1');
    }


    public function destroy($id){
    	$opportunite = Opportunite::find($id);
    	$opportunite->delete();
    	return redirect('opportunites');
    }

    public function destroyOP($id){
    	$oppProduct =  DB::table("produit_opportunites")->select('*')->where('id', $id);
    	$oppProduct->delete();
    	return back();
    }
}
