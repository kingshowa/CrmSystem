<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function index(){
    	$listContacts = Contact::all();
        return view('utilisateurs/utilisateur-view');
        //return view('contacts/contacts');
    }
}
