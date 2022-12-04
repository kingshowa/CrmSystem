<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\validate;
use DB; 
use Carbon\Carbon; 
use Mail; 
use Illuminate\Support\Str;

 use App\Http\Controllers\response;
use Illuminate\Http\RedirectResponse ;

class PasswordController extends Controller
{
    public function profile($id){
        $user = Utilisateur::find($id);
        return view('user-profile',['user'=> $user]);

    }
    public function changepassword(validate $request, $id){
        $user=Utilisateur::find($id);
        if(Hash::check(request('password'), $user->password)){
            
           $user->password = Hash::make(request('newpassword1'));
          
          return back()->with("status", "Password changed successfully!");
            
        }else
        return back()->with("error", "Old Password Doesn't match!");
            
             
    }
    // function forget(){
    //     return view('login/forget');
    // }
    // function reset(Request $request){
    //    // return view('login/forget');
    // }

    public function showForgetPasswordForm()
    {
       return view('login/forget');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:utilisateurs',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('login.email', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) { 
       return view('login.reset', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:utilisateurs',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
        echo "hjgy";
        $password = $request->input('password');
        $user = Utilisateur::where('email', $request->email)
                    ->update(['password' => Hash::make($password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('login')->with('message', 'Your password has been changed!');
    }
}
