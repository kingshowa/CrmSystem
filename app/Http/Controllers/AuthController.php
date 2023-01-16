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
  
        $user = Utilisateur::where('email', $email)->first();
       
        
        if (Hash::check(request('password'), $user->password)){

           
          if($user->role == 'admin'){

          
            $_SESSION['admin'] = $user->id;
                

               return redirect('/admin');
            }
            if ($user->role == 'commercial') {
              
              $_SESSION['commercial'] = $user->id;
              return redirect('/commercial');

            }else
             if($user->role == 'contact'){
                
                $_SESSION['contact'] = $user->contactID;
                
                return redirect('front-office/account/'.$user->contactID);

                }
        } else
        session()->flash('echec','Login invalid');
        return back();
           
            //return back();
    }
    function logout(Request $request){


      if(isset($_SESSION['admin'])||isset($_SESSION['commercial']))
        {
         
        session_destroy();
        return redirect('/');
       }
        else{
           
            session_unset();
            session_destroy();
           // return view('front-office.login');

        }
     

    }
    
}


