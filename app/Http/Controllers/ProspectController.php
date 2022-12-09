<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Prospect;
use Illuminate\Support\Facades\Auth;

class ProspectController extends Controller
{
    public function index(Request $request){
    	$listProspects = Prospect::all();
        $user = Utilisateur::find($request->session()->get('user'));
        
        return view('prospects/prospects', ['prospects' => $listProspects, 'user' => $user]);
        //return view('prospects/prospects');
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('prospects.prospect-add',['user' => $user]);
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


    public function details(Request $request,$id,$action){
    	$prospect = Prospect::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('prospects.prospect', ['prospect'=>$prospect,'user'=>$user],['action'=>$action]);

    
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
