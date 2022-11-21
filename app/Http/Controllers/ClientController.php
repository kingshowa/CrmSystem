<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
    	
        return view('clients/clients');
    }
    
    public function create(){
    	return view('clients.client-add');
    } 
   
    public function store(Request $request){
    	$client = new  Client();
    	$client->société = $request->input('société');
    	$client->téléphone = $request->input('téléphone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input(' site_web');
    	$client->save();
        return redirect('clients/clients');
    }

    public function details($id){
    	$client = Client::find($id);
    	return view('clients.client', ['client'=>$client]);
    }

    public function update(Request $request, $id){
    	$client = Client::find($id);
    	$client = new  Client();
    	$client->société = $request->input('société');
    	$client->téléphone = $request->input('téléphone');
        $client->adresse = $request->input('adresse');
    	$client-> site_web = $request->input(' site_web');
    	$client->save();
        return redirect('clients/clients');    	
    }

    public function destroy($id){
    	$client = Article::find($id);
    	$client->delete();
    	return redirect('clients');
    } 
}
