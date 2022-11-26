<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{   
    public function index(){
    	$listContacts = Contact::all();
        
        return view('contacts/contacts', ['contacts' => $listContacts]);
        //return view('contacts/contacts');
    }
    
    public function create(){
        $clients = Client::orderBy('societe')->get();
    	return view('contacts.contact-add',['clients'=>$clients]);
    } 
    public function create2($id){
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
    	$contact->client = $request->input('client');
    	$contact->save();
        session()->flash('succes','client ajouter avec success');
        return redirect('contacts');
    }

    public function details($id){
    	$contact = Contact::find($id);
    	return view('contacts.contact', ['contact'=>$contact]);
    }

    public function contact_details($id){
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
    	$contact->client = $request->input('client');
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
