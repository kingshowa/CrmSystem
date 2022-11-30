<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RendezController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\OpportuniteController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/contacts', [ContactController::class, 'index'])->name('index');
 Route::get('/contact-add', [ContactController::class, 'create'])->name('create');
 Route::post('/contact-add', [ContactController::class, 'store_contact'])->name('store_contact');
 Route::get('/contact/{id}', [ContactController::class, 'details'])->name('details');
 Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update');
 Route::put('/contact/update_by_contact/{id}', [ContactController::class, 'update_by_contact'])->name('update_by_contact');
 Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroy');
 Route::get('/contact-add2/{societe}', [ContactController::class, 'create2'])->name('create2');
 Route::get('/front-office/account/{id}', [ContactController::class, 'contact_details'])->name('contact_details');



 Route::get('/opportunites', [OpportuniteController::class, 'index'])->name('index');
 Route::get('/opportunites-add', [OpportuniteController::class, 'create'])->name('create');
 Route::post('/opportunites-add', [OpportuniteController::class, 'store_opportunite'])->name('store_opportunite');
 Route::get('/opportunite/{id}', [OpportuniteController::class, 'details'])->name('details');
 Route::put('/opportunite/{id}', [OpportuniteController::class, 'update'])->name('update');
 Route::delete('/opportunites/{id}', [OpportuniteController::class, 'destroy'])->name('destroy');


 Route::get('/prospects', [ProspectController::class, 'index'])->name('index');
 Route::get('/prospect-add', [ProspectController::class, 'create'])->name('create');
 Route::post('/prospect-add', [ProspectController::class, 'store_prospect'])->name('store_prospect');
 Route::get('/prospect/{id}', [ProspectController::class, 'details'])->name('details');
 Route::put('/prospect/{id}', [ProspectController::class, 'update'])->name('update');
 Route::delete('/prospects/{id}', [ProspectController::class, 'destroy'])->name('destroy');




Route::get('/', function () {
    return view('admin');
});
Route::get('/admin', function () {
    return view('admin');
});



Route::get('/', function () {
    return view('commerciale');
});
Route::get('/commerciale', function () {
    return view('commerciale');
});
/*Route::get('/prospects', function () {
    return view('prospects/prospects');

Route::get('/front-office', function () {
    return view('front-office/index');
>>>>>>> 9f95de9fafe4234f6e505b97a1bf09d313bdb55a
});

Route::get('/front-office/cars', function () {
    return view('front-office/cars');
});

Route::get('/front-office/login', function () {
    return view('front-office/login');
});

Route::get('/front-office/contact', function () {
    return view('front-office/contact');
});

Route::get('/front-office/team', function () {
    return view('front-office/team');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});




  Route::get('/clients', [ClientController::class, 'index'])->name('index');
  Route::get('/client-add', [ClientController::class, 'create'])->name('create');
  Route::post('/client-add', [ClientController::class, 'store'])->name('store');
  Route::get('/clientView/{id}', [ClientController::class, 'edite'])->name('show');
  Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('update');
  Route::delete('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('destroy');

  Route::put('/client/update_by_contact/{id}', [ClientController::class, 'update_by_contact'])->name('update_by_contact');
 




  Route::get('/rendez', [RendezController::class, 'index'])->name('index-rendez');
 Route::get('/rendez/create', [RendezController::class, 'create'])->name('create-rendez');
  Route::post('/rendez/store', [RendezController::class, 'store'])->name('store-rendez');
 Route::get('/rendezView/{id}', [RendezController::class, 'edite'])->name('show2');
 Route::put('/rendez/update/{id}', [RendezController::class, 'update'])->name('update-rendez');
Route::delete('/rendez/destroy/{id}', [RendezController::class, 'destroy'])->name('destroy-rendez');

Route::get('/rendez/creater/{societe}', [RendezController::class, 'creater'])->name('creater');




//*************************************************************** */

Route::get('/produits', [ProduitController::class, 'index'])->name('index');
Route::get('produits-add',[ProduitController::class, 'create'])->name('create');
Route::post('produit/store',[ProduitController::class, 'store'])->name('store-produit');
Route::get('produits/edite/{id}',[ProduitController::class, 'edite'])->name('edite-produit');
Route::put('produits/update/{id}',[ProduitController::class, 'update'])->name('update-produit');
Route::delete('produits/destroy/{id}', [ProduitController::class, 'destroy'])->name('destroy');

Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('index');
Route::get('utilisateurs-add',[UtilisateurController::class, 'create'])->name('create');
Route::post('utilisateurs/store',[UtilisateurController::class, 'store'])->name('store-ut');
Route::get('utilisateurs/edite/{id}',[UtilisateurController::class, 'edite'])->name('edite-ut');
Route::put('utilisateurs/update/{id}',[UtilisateurController::class, 'update'])->name('update-ut');
Route::delete('utilisateurs/destroy/{id}', [UtilisateurController::class, 'destroy'])->name('destroy-ut');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Authentification
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('verifier', [AuthController::class, 'verifier'])->name('verifier');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




