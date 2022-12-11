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
    public function index(Request $request){
        $listutilisateurs=Utilisateur::all();
        $user = Utilisateur::find($request->session()->get('user'));
    	
        return view('utilisateurs/utilisateur-view',['utilisateurs'=> $listutilisateurs,]);
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('utilisateurs.utilisateur-add',['user'=>$user]);
    } 
   
    public function store(Request $request){
        $this->validate($request, ['image' => 'nullable']);
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
            
            return back()->with(session()->flash('echec','Email existe deja'));
        }else  $utilisateur->email = $request->input('email');
    
       
    	

        $filenameWithExt = $request->file("image")->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension=$request->file("image")->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file("image")->storeas('public/imag', $filenametostore);


        $utilisateur->image = $filenametostore;
    	$utilisateur->save();
        session()->flash('success','client ajouter avec success');
        return redirect('utilisateurs');
    }


    public function edite(Request $request,$id, $action){
    	$utilisateur = Utilisateur::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('utilisateurs/utilisateurs', ['utilisateur'=>$utilisateur,'user'=>$user], ['action'=>$action]);



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