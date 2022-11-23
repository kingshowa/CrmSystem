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
    	return view('utilisateurs.utilisateur-add');
    } 
   
    public function store(Request $request){
    	$utilisateur = new  Utilisateur();
    	$utilisateur->nom = $request->input('firstName');
    	$utilisateur->prenom = $request->input('surName');
        $utilisateur->email = $request->input('email');
    	//$utilisateur->password = $request->input('password');
    	$utilisateur->save();
        return redirect('utilisateurs');
    }

    public function edite($id){
    	$utilisateur = Utilisateur::find($id);
    	return view('utilisateurs/utilisateur-view', ['utilisateur'=>$utilisateur]);
    }

    public function update(Request $request, $id){
    	$utilisateur = Utilisateur::find($id);
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