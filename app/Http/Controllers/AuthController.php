<?php

namespace App\Http\Controllers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class AuthController extends Controller
{
    function login(){
        return view('login');
    }
    function verifier(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
    
       // $emailok =  DB::table('utilisateurs')->where('email',$email)->first();
        //$pass=Hash::check($request->get('password'));
        $user = Utilisateur::where('email', $email)->first();
       

        if ( Hash::check(request('password'), $user->password)){
          
          
          if($user->role == 'admin'){
               // $user->session()->regenerate();
              return view('admin', ['user'=>$user]);}
              else
              echo"nnnn";
          
        
             }
    }
    function logout(){
        auth()->logout();
        return redirect('login');
    }
}


