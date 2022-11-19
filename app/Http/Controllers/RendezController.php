<?php

namespace App\Http\Controllers;

use App\Models\Rendez;
use Illuminate\Http\Request;


class RendezController extends Controller
{
    public function index(){
        return view('rendez-vous/rendez-vous');
    }
    
    public function create(){
    	return view('rendez-vous.rendez-add');
    } 
   
    public function store(Request $request){
    	$rendez= new  rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input(' client');
        $rendez-> commerciel = $request->input(' commerciel');
    	$rendez->save();
        return redirect('rendez-vous/clientView');
    }

    public function details($id){
    	$client = Client::find($id);
    	return view('clients.clientView', ['client'=>$client]);
    }

    public function update(Request $request, $id){
    	$rendez = Rendez::find($id);
    	$rendez= new  Rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input(' client');
        $rendez-> commerciel = $request->input(' commerciel');
    	$rendez->save();
        return redirect('rendez-vous/rendezView$'$id);   	
    }

    public function destroy($id){
    	$client = Article::find($id);
    	$client->delete();
    	return redirect('rendez-vous/rendez-vous');
    } 
}
