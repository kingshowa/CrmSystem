<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Utilisateur;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{   
    public function index(Request $request){
    	$listContacts = Contact::all();
        $user = Utilisateur::find($request->session()->get('user'));
        
        return view('contacts/contacts', ['contacts' => $listContacts]);
        //return view('contacts/contacts');
    }
    
    public function create(Request $request){
        $clients = Client::orderBy('societe')->get();
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('contacts.contact-add',['clients'=>$clients,'user'=>$user]);
    } 
    public function create2(Request $request,$id){
        $societe= Client::find($id);

        $user = Utilisateur::find($request->session()->get('user'));
        
    	return view('contacts.contact-add2', ['societe' => $societe,'user'=>$user]);

    	

    } 
   
    public function store_contact(Request $request){
    	$contact = new Contact();
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->client = $request->input('client');
    	$contact->save();
        session()->flash('succes','You have successfully added the contact '.$contact->nom);
        return redirect('contacts');
    }
    public function store_contactClient(Request $request){
    	$contact = new Contact();
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->client = $request->input('client');
    	$contact->save();
        $client = Client::where('societe',$request->input('client'))->first();
        $id=$client->id;
        session()->flash('succes','client ajouter avec success');
       // return view('clients.clientView', ['client'=>$client]);
        return redirect('clientView/'.$id);
    }


    

    public function details(Request $request,$id, $action){
    	$contact = Contact::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('contacts.contact', ['contact'=>$contact,'user'=>$user], ['action'=>$action]);

    }

    public function contact_details(Request $request,$id){
    	$contact = Contact::find($id);
        $sos = $contact->client;
        $societe = DB::table('clients')->where('societe', $sos)->first();
        
    	return view('front-office.account', ['contact'=>$contact], ['societe'=>$societe]);
    }

    public function update(Request $request, $id){
    	$contact = Contact::find($id);
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->client = $contact->client;
    	$contact->save();
        return redirect('contact/'.$id);    	
    }

    public function update_by_contact(Request $request, $id){
    	$contact = Contact::find($id);
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->client = $contact->client;
    	$contact->save();
        return back();    	
    }

    public function destroy($id){
    	$contact = Contact::find($id);
    	$contact->delete();
    	return redirect('contacts');
    } 
    
}
