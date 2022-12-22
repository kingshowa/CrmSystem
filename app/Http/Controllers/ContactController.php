<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Utilisateur;
use App\Models\Opportunite;

use Illuminate\Support\Facades\DB;
 session_start();
class ContactController extends Controller
{   
    public function index(Request $request){
    	$listContacts = Client::join('contacts', 'clients.id', '=', 'contacts.clientID')->get();
        return view('contacts/contacts', ['contacts' => $listContacts]);
    }
    
    public function create(Request $request){
        $clients = Client::orderBy('societe')->get();
    	return view('contacts.contact-add',['clients'=>$clients]);
    } 

    public function create2(Request $request,$id){
        $societe= Client::find($id);
    	return view('contacts.contact-add2', ['societe' => $societe]);
    } 
   
    public function store_contact(Request $request){
    	$contact = new Contact();
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->clientID = $request->input('client');
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
    	$contact->clientID = $request->input('client');
    	$contact->save();
        session()->flash('succes','You have successfully added the contact '.$contact->nom);
        $client = Client::where('societe',$request->input('client'))->first();
        $id=$request->input('client');
        return redirect('clientView/'.$id.'/1');
    }

    public function details($id, $action){
    	
        $contact = DB::table('clients')->join('contacts', 'clients.id', '=', 'contacts.clientID')
               ->where('contacts.id', $id)
               ->select('contacts.*', 'clients.societe')
               ->get(); 
    	return view('contacts.contact', ['contact'=> $contact], ['action'=>$action]);
    }
       
    public function contact_details(Request $request,$id){
        $contact = Contact::join('clients', 'clients.id', '=', 'contacts.clientID')->where('contacts.id', $id)->get()[0];
        $opps = Opportunite::where('clientID', $contact->clientID)->get();
    	return view('front-office.account', ['contact'=>$contact, 'opps'=>$opps]);
    }

    public function update(Request $request, $id){
    	$contact = Contact::find($id);
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->clientID = $contact->clientID;
    	$contact->save();
        return back();    	
    }

    public function update_by_contact(Request $request, $id){
    	$contact = Contact::find($id);
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->clientID = $contact->clientID;
    	$contact->save();
        return back();    	
    }

    public function destroy($id){
    	$contact = Contact::find($id);
    	$contact->delete();
    	return redirect('contacts');
    }   
}
