<?php

namespace App\Http\Controllers;
use App\Models\Rendez;
use Illuminate\Http\Request;


class RendezController extends Controller
{
    public function index(){
        $listrendez = Rendez::all();
    	
        return view('rendez-vous/rendez-vous',['rendez'=> $listrendez]);
    }
    
    public function create(){
    	return view('rendez-vous.rendez-add');
    } 
   
    public function store(Request $request){
    	$rendez= new  Rendez();
    	$rendez->date = $request->input('date');
    	$rendez->heure = $request->input('heure');
        $rendez->compte = $request->input('compte');
    	$rendez-> client = $request->input('client');
        $rendez-> commerciel = $request->input('commercial');
    	$rendez->save();
        return redirect('rendez-vous');
    }

    public function edite($id){
    	$rendez = Rendez::find($id);
    	return view('rendez-vous.rendezView', ['rendez'=>$rendez]);
    }

    public function update(Request $request, $id){
    	$rendez = Rendez::find($id);
    	$rendez->save();
        return redirect('rendez');   	
    }

    public function destroy($id){
    	$rendez = Rendez::find($id);
    	$rendez->delete();
    	return redirect('rendez-vous/rendez-vous');
    } 
}
