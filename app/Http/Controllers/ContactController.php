<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{   
    public function index(){
    	$listContacts = Contact::all();
        return view('contacts/contacts', ['contacts' => $listContacts]);
        //return view('contacts/contacts');
    }
    
    public function create(){
    	return view('contacts.contact-add');
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
        return redirect('contacts');
    }

    public function details($id){
    	$contact = Contact::find($id);
    	return view('contacts.contact', ['contact'=>$contact]);
    }

    public function contact_details($id){
    	$contact = Contact::find($id);
    	return view('front-office', ['contact'=>$contact]);
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

    public function destroy($id){
    	$contact = Contact::find($id);
    	$contact->delete();
    	return redirect('contacts');
    } 

}
