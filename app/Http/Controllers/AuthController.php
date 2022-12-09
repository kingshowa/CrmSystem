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
        return view('login.login');
    }
    function verifier(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
    
       // $emailok =  DB::table('utilisateurs')->where('email',$email)->first();
        //$pass=Hash::check($request->get('password'));
        $user = Utilisateur::where('email', $email)->first();
       

        if ( Hash::check(request('password'), $user->password)){

            $request->session()->put('user', $user->id);
          if($user->role == 'admin'){
               // $user->session()->regenerate();
              return view('admin', ['user'=>$user]);}
              else
             if($user->role == 'contact'){
                return view('front-office.account', ['user'=>$user]);

             };


        } else
            return back();
    }
    function logout(){
        auth()->logout();
        return redirect('login');
    }
    function profile( $id)
    {
        $user=Utilisateur::where('id', $id)->first();
        return  view('user-profile', ['user'=>$user]);

    }
}


