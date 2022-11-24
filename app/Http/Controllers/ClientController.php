<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Rendez;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $listclients=Client::all();
    	
        return view('clients/clients',['clients'=> $listclients]);
    }
    
    public function create(){
    	return view('clients.client-add');
    } 
   
    public function store(Request $request){
    	$client = new  Client();
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input('site_web');
    	$client->save();
        return redirect('clients');
    }

    public function edite($id){
    	$client = Client::find($id);
        //$contact=Contact::find($client->societe);
        $contact = Contact::where('client',$client->societe)->get();
        $rendez = Rendez::where('client',$client->societe)->get();
    	return view('clients.clientView', ['client'=>$client,'contacts'=>$contact,'rendezs'=>$rendez]);
    }

    public function update(Request $request, $id){
    	$client = Client::find($id);
    	
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input('site_web');
    	$client->save();
        return redirect('clients');    	
    }

    public function destroy($id){
    	$client = Client::find($id);
    	$client->delete();
    	return redirect('clients');
    } 
}
