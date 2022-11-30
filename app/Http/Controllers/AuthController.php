<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }
    function verifier(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
    
        $emailok =  DB::table('utilisateurs')->where('email',$email)->first();

        if ($emailok == null){
            echo"nnnnnnnn";}
           
           else{
            echo"nnnnnnnn";
            $emailok =  DB::table('utilisateurs')->where('password',$password)->first();
            if($emailok != null)
          
            
             //if($passwordOk->role == 'admin')
              return view('layouts.Master', ['user'=>$emailok]);

          
        
             }
    }
}


