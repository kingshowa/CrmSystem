<?php

namespace App\Http\Controllers;
use App\Models\Rendez;
use App\Models\Client;
use App\Models\Utilisateur;

use Illuminate\Http\Request;
use App\Http\Requests\validerendez;
use Illuminate\Support\Facades\DB;
session_start();

class RendezController extends Controller
{
    public function index(Request $request){
        //$listrendez = Rendez::all();
        //$user = Utilisateur::find($request->session()->get('user'));
        $rendez = Rendez::where('user_id', $_SESSION['admin'])->get();
    	
        return view('rendez-vous/rendez-vous',['rendez'=> $rendez]);
    }
    
    public function create(Request $request){
        $clients = Client::orderBy('societe')->get();
        
    	return view('rendez-vous.rendez-add',['clients'=>$clients]);
    } 
    public function creater(Request $request,$id){
        $societe= Client::find($id);
       
        
    	return view('rendez-vous.rendez-add2', ['societe' => $societe]);
    } 
   
    public function store(Request $request){
    	$rendez= new  Rendez();
        
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez->client = $request->input('client');
        $rendez->user_id =  $_SESSION['admin'];
    	$rendez->save();
        session()->flash('succes','rendez-vous bien ajouter');
        return redirect('rendez');
    }

    public function store2(Request $request){
    	$rendez= new  Rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez->client = $request->input('client');
        $rendez->user_id =  $_SESSION['admin'];
    	$rendez->save();
        session()->flash('bien','rendez-vous ajouter avec success');
        $client = Client::where('societe',$request->input('client'))->first();
        $id=$client->id;
        
    //     session()->flash('succes','rendez-vous bien ajouter');
    //     $client = Client::where('societe',$request->input('client'))->first();
    //     $id=$client->id;
    //     session()->flash('succes','client ajouter avec success');
    //    // return view('clients.clientView', ['client'=>$client]);
    //     return redirect('clientView/'.$id);
    return redirect('clientView/'.$id.'/1');
    }


   

    public function edite(Request $request,$id, $action){

        // $rendez = Utilisateur::join('rendezs', 'rendezs.user_id', '=', 'utilisateurs.id')
        //     ->where('rendezs.id', '=', $id)
        //     ->get(['utilisateurs.nom','rendezs.*']);


            $rendez = DB::table('utilisateurs')->join('rendezs', 'utilisateurs.id', '=', 'rendezs.user_id')
               ->where('rendezs.id', $id)
               ->select('rendezs.*', 'utilisateurs.nom')
               ->get();
            
        $user = Utilisateur::find($request->session()->get('user'));

    	return view('rendez-vous.rendezView', ['rendez'=>$rendez,'user' => $user,'action'=>$action]);

    }

    public function update(Request $request, $id){
    	$rendez = Rendez::find($id);
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
        $rendez->user_id = $_SESSION['admin'];
    	$rendez->save();
        return back();      	
    }

    public function destroy($id){
    	$rendez = Rendez::find($id);
    	$rendez->delete();
    	
    	return redirect('rendez');
    } 
}

