<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectController extends Controller
{
    public function index(){
    	
        return view('prospects/prospects');
    }
    
    public function create(){
    	return view('prospects.prospect-add');
    } 
   
    public function store(Request $request){
    	$prospect = new  Prospect();
        $prospect->nom = $request->input('nom');
        $prospect->prénom = $request->input('prénom');
    	$prospect->société = $request->input('société');
        $prospect->fonction = $request->input('fonction');
        $prospect->email = $request->input('email');
    	$prospect->téléphone = $request->input('téléphone');
        $prospect->adresse = $request->input('adresse');
    	$prospect-> site_web = $request->input(' site_web');
        $prospect->Statut = $request->input('Statut');
        $prospect->source = $request->input('source');
    	$prospect->save();
        return redirect('prospects/prospects');
    }

    public function details($id){
    	$prospect = Prospect::find($id);
    	return view('prospects.prospect', ['prospects'=>$prospects]);
    }

    public function update(Request $request, $id){
    	$prospect = Prospect::find($id);
    	$prospect = new  Prospects();
        $prospect->nom = $request->input('nom');
        $prospect->prénom = $request->input('prénom');
    	$prospect->société = $request->input('société');
        $prospect->fonction = $request->input('fonction');
        $prospect->email = $request->input('email');
    	$prospect->téléphone = $request->input('téléphone');
        $prospect->adresse = $request->input('adresse');
    	$prospect-> site_web = $request->input(' site_web');
        $prospect->Statut = $request->input('Statut');
        $prospect->source = $request->input('source');
    	$prospect->save();
        return redirect('prospects/prospects');    	
    }

    public function destroy($id){
    	$prospect = Article::find($id);
    	$prospect->delete();
    	return redirect('prospects');
    } 
}
