<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\validate;
session_start();
class UtilisateurController extends Controller
{
    
    public function index(Request $request){
        $listutilisateurs=Utilisateur::all();
        $user = Utilisateur::find($request->session()->get('user'));
    	
        return view('utilisateurs/utilisateur-view',['utilisateurs'=> $listutilisateurs,'user'=>$user]);
    }
    
    public function create(Request $request){
       
        $contact=Contact::orderBy('id')->get();
    	return view('utilisateurs.utilisateur-add',['contact'=>$contact]);
    } 
   
    public function store(Request $request){
        $this->validate($request, ['image' => 'nullable']);
    	$utilisateur = new  Utilisateur();
    	
        
       
        
    	$password = $request->input('password');
        $utilisateur->password = Hash::make($password);

       
        $c = $request->input('role');
        if ($c == "radio1") {
            $utilisateur->role = 'admin';
            $utilisateur->nom = $request->input('firstName');
            $utilisateur->prenom = $request->input('surName');

        }else if ($c == "radio2"){
            
                $utilisateur->role = 'commercial';
                $utilisateur->nom = $request->input('firstName');
    	        $utilisateur->prenom = $request->input('surName');
            } else {
                $contact = Contact::where('id',$utilisateur->contactID)->get();
                $utilisateur->contactID = $request->input('contactID');
                $utilisateur->role = 'contact';
                $utilisateur->nom = $contact[0]->nom;
                $utilisateur->prenom = $contact[0]->prenom;
            }
            
          
        if (Utilisateur::where('email', $request->input('email'))->exists() ) {
            
            return back()->with(session()->flash('echec','Email existe deja'));
        }else  $utilisateur->email = $request->input('email');


        $a = $request->input('image');
        if($request->hasFile('image')) {
            $filenameWithExt = $request->file("image")->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("image")->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file("image")->storeas('public/imag', $filenametostore);


            $utilisateur->image = $filenametostore;
        }
       
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

    function profile( $id)
    {
        $user=Utilisateur::where('id', $id)->first();
        return  view('user-profile', ['user'=>$user]);

    }

    public function edite_profile(Request $request, $id){
    	$utilisateur = Utilisateur::find($id);

    	$utilisateur->image = $utilisateur->image;
    	$utilisateur->nom = $request->input('nom');
    	$utilisateur->prenom = $request->input('prenom');
        $utilisateur->email = $request->input('email');
    	$utilisateur->save();
        return back();    	
    }

    public function edite_photo(Request $request, $id){
    	$utilisateur = Utilisateur::find($id);
    	
    	$utilisateur->nom = $utilisateur->nom;
    	$utilisateur->prenom = $utilisateur->prenom;
        $utilisateur->email = $utilisateur->email;
        $filenameWithExt = $request->file("image")->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension=$request->file("image")->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file("image")->storeas('public/imag', $filenametostore);


        $utilisateur->image = $filenametostore;
    	
    	$utilisateur->save();
        return back();    	
    }
    
}