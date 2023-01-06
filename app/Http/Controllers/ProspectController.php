<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
 session_start();
class ProspectController extends Controller
{
    public function index(Request $request){
    	$listProspects = Prospect::all();
        if($request->has('deleted'))
        {
            $listProspects=Prospect::onlyTrashed()->get();
        }
        
        return view('prospects/prospects', ['prospects' => $listProspects]);
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

        $client = new Client();
        $contact = new Contact();

       
       
       
       

        $user = Utilisateur::find($request->session()->get('user'));
    	return view('prospects.prospect', ['prospect'=>$prospect],['action'=>$action]);

    
    }

    public function transforme($id){
        $prospect = Prospect::find($id);
        if ($prospect->est_transmit == false) {
            $client = new Client();
            $client->societe = $prospect->societe;
            $client->telephone = $prospect->telephone;
            $client->adresse = $prospect->adresse;
            $client->site_web = $prospect->site_web;
            $client->save();
            
            $contact = new Contact();
            $contact->nom = $prospect->nom;
            $contact->prenom = $prospect->prenom;
            $contact->fonction = $prospect->fonction;
            $contact->email = $prospect->email;
            $contact->telephone = $prospect->telephone;
            $contact->clientID = $client->id;
            $contact->save();

           
            
            $prospect->est_transmit = true;
            $prospect->save();
            session()->flash('succes', 'prespect transformer avec success');
            return redirect('prospects');
        }else {
            session()->flash('echec', 'prespect est deja transmit');
            return back();
        }

       

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
        $prospect->site_web = $request->input('site_web');
        $prospect->statut = $request->input('statut');
        $prospect->source = $request->input('source');
    	$prospect->save();
        return back();    	
    }

    public function destroy($id){
    	$prospect = Prospect::find($id);
    	$prospect->delete();
    	return back()->with('delete','Prospect Delete successfully');
    } 
    public function restore($id){
    	Prospect::withTrashed()->find($id)->restore();
    	
    	return back()->with('restore','Prospect Restore successfully');
       
    } 

    public function restore_all(){
    	Prospect::withTrashed()->restore();
    	
    	return redirect('prospects');
       
    } 
}