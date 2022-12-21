<?php

namespace App\Http\Controllers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Produit;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Prospect;
use App\Models\Opportunite;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

 session_start();


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
       
        
        if (Hash::check(request('password'), $user->password)){

           
          if($user->role == 'admin'){
              session_start();
              $_SESSION['admin'] = $user->id;
               return redirect('/admin');
            }
            if ($user->role == 'commercial') {
                session_start();
              $_SESSION['commercial'] = $user->id;
               return view('/commerciale');

            }else
             if($user->role == 'contact'){
                session_start();
              $_SESSION['contact'] = $user->id;
                
                return view('front-office.account');

                }
            echo "vcdf";


        } else
        session()->flash('echec','Login invalid');
        return redirect('login');
           
            //return back();
    }
    function logout(Request $request){
        // if (SESSION()->has('admin')) {
        //     //SESSION()->pull('admin');
        //     //unset($_SESSION['admin']);
            
        // } 
        session_destroy();
        return redirect('/');
    }
    
}


