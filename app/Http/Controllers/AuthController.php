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

// session_start();


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

            // $request->session()->put('user', $user->id);
          if($user->role == 'admin'){
               // $user->session()->regenerate();

              session_start();
              $_SESSION['admin'] = $user->id;
                //$request->session()->put('admin',$user->id);
               return redirect('/');

            //   return view('admin', ['user'=>$user,'nbrclient'=> $nombreclient,
            //   'nbrcontact'=>$nombrecontact,'nbrprospect'=>$nombreprospect,'nbrproduit'=>$nombreproduit
            // ,'months'=>$months,'montho'=>$montho,'produit'=>$yproduit,
            // 'heurs'=>$heurs,'yearp'=>$yearp,'contacth'=>$contacth,
            // 'contactv'=>$contactv]);
              
            

            //    session_start();
            //    $_SESSION['admin']=$user->id;

            //$id = $_SESSION['admin'];
             }

              else
             if($user->role == 'contact'){
                return view('front-office.account', ['user'=>$user]);

                }
            echo "vcdf";


        } else
        session()->flash('echec','Login invalid');
        return redirect('login');
           
            //return back();
    }
    function logout(Request $request){
        if (SESSION()->has('admin')) {
            SESSION()->pull('admin');
            return redirect('login');
        } 
    }
    
}


