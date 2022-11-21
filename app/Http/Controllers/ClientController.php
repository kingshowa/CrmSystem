<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
    	$client->société = $request->input('societe');
    	$client->téléphone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input(' site_web');
    	$client->save();
        return redirect('clients');
    }

    public function edite($id){
    	$client = Client::find($id);
    	return view('clients.clientView', ['client'=>$client]);
    }

    public function update(Request $request, $id){
    	$client = Client::find($id);
    	$client = new  Client();
    	$client->société = $request->input('societe');
    	$client->téléphone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input(' site_web');
    	$client->save();
        return redirect('clients');    	
    }

    public function destroy($id){
    	$client = Client::find($id);
    	$client->delete();
    	return redirect('clients');
    } 
}
