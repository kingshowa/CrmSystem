<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Opportunite;
use App\Models\Utilisateur;
use App\Models\Contact;
use App\Models\Rendez;
use Illuminate\Http\Request;
use App\Http\Requests\validate;
use Illuminate\Support\Facades\DB;
 session_start();
class ClientController extends Controller
{
    
    public function index(Request $request){
        $listclients=Client::all();
        if($request->has('deleted'))
        {
            $listclients=Client::onlyTrashed()->get();
        }
        return view('clients/clients',['clients'=> $listclients]);
    }
    
    
    public function create(Request $request){
       
    	return view('clients.client-add');
    } 
   
    public function store(validate $request){
    	$client = new  Client();
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client->site_web = $request->input('site_web');
    	$client->save();
        session()->flash('succes','client ajouter avec success');
        return redirect('clients');
    }


    

    public function edite(Request $request,$id, $action){

    	$client = Client::find($id);

       

        //$contact=Contact::find($client->societe);
        
        $rendez = Rendez::where('client',$client->societe)->get();

        
        $contact = Contact::where('clientID',$id)->get();
        $opp = Opportunite::where('clientID',$id)->get();
   

      
        $rendez = DB::table('rendezs')->join('utilisateurs', 'utilisateurs.id', '=', 'rendezs.user_id')
               ->where('rendezs.user_id',$_SESSION['admin'])
               ->where('utilisateurs.id', $_SESSION['admin'])
               ->where('rendezs.client', $client->societe)
               ->select('rendezs.*', 'utilisateurs.*')
               ->get();

       
    	

    	return view('clients.clientView', ['client'=>$client,'contacts'=>$contact,'rendezs'=>$rendez, 
                                           'action'=>$action,'opp'=>$opp]);

    }

    public function update(Request $request, $id){
    	$client = Client::find($id);
    	
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client->site_web = $request->input('site_web');
    	$client->save();
        return back();    	
    }

    // details de la client edité par le contact
    public function update_by_contact(Request $request, $id){
    	$client = Client::find($id);
    	$client->societe = $client->societe;
    	$client->telephone = $request->input('telephone');
        $client->adresse = $request->input('adresse');
    	$client->site_web = $request->input('site_web');
    	$client->save();
        return back();    	
    }

    public function destroy($id){
    	$client = Client::find($id);
    	$client->delete();
    	return back()->with('delete','Client deleted successfully');
       
    } 
    public function restore($id){
    	Client::withTrashed()->find($id)->restore();
    	
    	return back()->with('restore','Client Restore successfully');
       
    } 

    public function restore_all(){
    	Client::withTrashed()->restore();
    	
    	return redirect('clients');
       
    } 


}
    

