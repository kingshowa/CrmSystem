<?php

namespace App\Http\Controllers;
use App\Models\Rendez;
use App\Models\Client;
use App\Models\Utilisateur;

use Illuminate\Http\Request;
use App\Http\Requests\validerendez;


class RendezController extends Controller
{
    public function index(Request $request){
        $listrendez = Rendez::all();
        $user = Utilisateur::find($request->session()->get('user'));
    	
        return view('rendez-vous/rendez-vous',['rendez'=> $listrendez]);
    }
    
    public function create(Request $request){
        $user = Utilisateur::find($request->session()->get('user'));
    	return view('rendez-vous.rendez-add',['user'=>$user]);
    } 
    public function creater(Request $request,$id){
        $societe= Client::find($id);
        $user = Utilisateur::find($request->session()->get('user'));
        
    	return view('rendez-vous.rendez-add2', ['societe' => $societe,'user'=>$user]);
    } 
   
    public function store(validerendez $request){
    	$rendez= new  Rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
       $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input('client');
        $rendez-> commercial = $request->input('commercial');
    	$rendez->save();
        session()->flash('succes','rendez-vous bien ajouter');
        return redirect('rendez');
    }

    public function store2(validerendez $request){
    	$rendez= new  Rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
       $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input('client');
        $rendez-> commercial = $request->input('commercial');
    	$rendez->save();
        session()->flash('succes','rendez-vous bien ajouter');
        $client = Client::where('societe',$request->input('client'))->first();
        $id=$client->id;
        session()->flash('succes','client ajouter avec success');
       // return view('clients.clientView', ['client'=>$client]);
        return redirect('clientView/'.$id);
    }


   

    public function edite(Request $request,$id, $action){
    	$rendez = Rendez::find($id);
        $user = Utilisateur::find($request->session()->get('user'));

    	return view('rendez-vous.rendezView', ['rendez'=>$rendez,'user' => $user,'action'=>$action]);

    }

    public function update(validerendez $request, $id){
    	$rendez = Rendez::find($id);
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input('client');
        $rendez-> commercial = $request->input('commercial');
    	$rendez->save();
        return redirect('rendez');      	
    }

    public function destroy($id){
    	$rendez = Rendez::find($id);
    	$rendez->delete();
    	
    	return redirect('rendez');
    } 
}

