<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Utilisateur;
use App\Models\Contact;
use App\Models\Rendez;
use Illuminate\Http\Request;
use App\Http\Requests\validate;

class ClientController extends Controller
{
    public function index(Request $request){
        $listclients=Client::all();
        $user = Utilisateur::find($request->session()->get('user'));
    	
        return view('clients/clients',['clients'=> $listclients]);
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('clients.client-add',['user'=>$user]);
    } 
   
    public function store(validate $request){
    	$client = new  Client();
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input('site_web');
    	$client->save();
        session()->flash('succes','client ajouter avec success');
        return redirect('clients');
    }


    

    public function edite(Request $request,$id, $action){

    	$client = Client::find($id);
        //$contact=Contact::find($client->societe);
        $contact = Contact::where('client',$client->societe)->get();
        $rendez = Rendez::where('client',$client->societe)->get();

        $user = Utilisateur::find($request->session()->get('user'));
    	

    	return view('clients.clientView', ['client'=>$client,'contacts'=>$contact,'rendezs'=>$rendez,'user'=>$user, 'action'=>$action]);

    }

    public function update(validate $request, $id){
    	$client = Client::find($id);
    	
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input('site_web');
    	$client->save();
        return back();    	
    }

    // details de la client edité par le contact
    public function update_by_contact(Request $request, $id){
    	$client = Client::find($id);
    	$client->societe = $client->societe;
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input('site_web');
    	$client->save();
        return back();    	
    }

    public function destroy($id){
    	$client = Client::find($id);
    	$client->delete();
    	return redirect('clients');
       
    } 
}
    

