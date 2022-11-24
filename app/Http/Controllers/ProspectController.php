<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectController extends Controller
{
    public function index(){
    	$listProspects = Prospect::all();
        return view('prospects/prospects', ['prospects' => $listProspects]);
        //return view('prospects/prospects');
    }
    
    public function create(){
    	return view('prospects.prospect-add');
    } 
   
    public function store_prospect(Request $request){
    	$prospect = new  Prospect();
        $prospect->nom = $request->input('nom');
        $prospect->prenom = $request->input('prenom');
    	$prospect->societe = $request->input('societe');
        $prospect->fonction = $request->input('fonction');
        $prospect->adresse = $request->input('adresse');
        $prospect->telephone = $request->input('telephone');
        $prospect->email = $request->input('email');
    	
        
    	$prospect-> site_web = $request->input('site_web');
        $prospect->statut = $request->input('statut');
        $prospect->source = $request->input('source');
    	$prospect->save();
        return redirect('prospects');
    }

    public function details($id){
    	$prospect = Prospect::find($id);
    	return view('prospects.prospect', ['prospect'=>$prospect]);
    }

    public function update(Request $request, $id){
    	$prospect = Prospect::find($id);
        $prospect->nom = $request->input('nom');
        $prospect->prenom = $request->input('prenom');
    	$prospect->societe = $request->input('societe');
        $prospect->fonction = $request->input('fonction');  
        $prospect->adresse = $request->input('adresse');
        $prospect->telephone = $request->input('telephone');
        $prospect->email = $request->input('email');
    	
      

        $prospect-> site_web = $request->input('site_web');
        $prospect->statut = $request->input('statut');
        $prospect->source = $request->input('source');
    	$prospect->save();
        return redirect('prospect/'.$id);    	
    }

    public function destroy($id){
    	$prospect = Prospect::find($id);
    	$prospect->delete();
    	return redirect('prospects');
    } 
}
