<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\validate;

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
        $request->validate(['password'=>'min:8']);
    	$password = $request->input('password');
        $utilisateur->password = Hash::make($password);

       
        $c = $request->input('role');
        if ($c == "radio1") {
            $utilisateur->role = 'admin';}
        else {
            if($c=="radio2")
            $utilisateur->role = 'commercial';
            else 
            $utilisateur->role = 'contact';
            }
          
        if (Utilisateur::where('email', $request->input('email'))->exists() ) {
            
            return back();
        }else  $utilisateur->email = $request->input('email');
    
       
    	//$utilisateur->password = $request->input('password');
    	$utilisateur->save();
        return redirect('utilisateurs');
    }

    public function edite($id){
    	$utilisateur = Utilisateur::find($id);
    	return view('utilisateurs/utilisateurs', ['utilisateur'=>$utilisateur]);
    }

    public function update(Request $request, $id){
    	$utilisateur = Utilisateur::find($id);
    	
    	$utilisateur->nom = $request->input('firstName');
    	$utilisateur->prenom = $request->input('surName');
        $utilisateur->email = $request->input('email');
    	//$utilisateur->password = $request->input('password');
    	$utilisateur->save();
        return redirect('utilisateurs');    	
    }

    public function destroy($id){
        
    	$utilisateur = Utilisateur::find($id);
        $utilisateur->delete();
    	return redirect('utilisateurs');
    } 
    
}