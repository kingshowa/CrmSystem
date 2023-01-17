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
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ChartsController;


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

 Route::get('/contacts', [ContactController::class, 'index'])->name('indexcontact');
 Route::get('/contact-add', [ContactController::class, 'create'])->name('create');
 Route::post('/contact-add', [ContactController::class, 'store_contact'])->name('store_contact');
 Route::get('/contact/{id}/{action}', [ContactController::class, 'details'])->name('details');
 Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update_contact');
 Route::put('/contact/update_by_contact/{id}', [ContactController::class, 'update_by_contact'])->name('update_by_contact');
 Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroy');
 Route::get('/contacts-restore/{id}', [ContactController::class, 'restore_contact'])->name('restore_contact');
 Route::get('/contacts-restoreall', [ContactController::class, 'restore_allcontact'])->name('restore-allcontact');
 Route::get('/contact-add2/{societe}', [ContactController::class, 'create2'])->name('create2');
 Route::post('/contact-add2', [ContactController::class, 'store_contactClient'])->name('store_contactClient');
 Route::get('/front-office/account/{id}', [ContactController::class, 'contact_details'])->name('contact_details');
 

Route::get('/opportunites', [OpportuniteController::class, 'index'])->name('indexopp');
Route::get('/opportunites-add', [OpportuniteController::class, 'create'])->name('create');
Route::get('/opp-product/{id}', [OpportuniteController::class, 'create_prod'])->name('create_prod');
Route::get('/opp-product-edit/{idPO}/{idOpp}', [OpportuniteController::class, 'create_prod_edit'])->name('create_prod_edit');
Route::post('/opportunites-add', [OpportuniteController::class, 'store_opportunite'])->name('store_opportunite');
Route::post('/opp-product/{id}', [OpportuniteController::class, 'store_opp_product'])->name('store_opp_product');
Route::get('/opportunite/{id}/{action}', [OpportuniteController::class, 'details'])->name('details');
Route::get('/acc-opportunite/{id}/{action}', [OpportuniteController::class, 'contact_opp_details'])->name('contact_opp_details');
Route::put('/opportunite/{id}', [OpportuniteController::class, 'update'])->name('update');
Route::put('/opp-product/{id}/{idOpp}', [OpportuniteController::class, 'updateOP'])->name('updateOP');
Route::delete('/opportunites/{id}', [OpportuniteController::class, 'destroy'])->name('destroy');
Route::get('/opportunites-restore/{id}', [OpportuniteController::class, 'restore_opp'])->name('restore-opp');
Route::get('/opportunites-restoreall', [OpportuniteController::class, 'restore_allopp'])->name('restore-allopp');
Route::delete('/opp-product/{id}', [OpportuniteController::class, 'destroyOP'])->name('destroyOP');
Route::get('/opportunites/factures', [OpportuniteController::class, 'facture'])->name('facture');
Route::get('/opp-add/{id}', [OpportuniteController::class, 'oppcreate'])->name('oppcreate');
Route::post('/oppstore', [OpportuniteController::class, 'oppstore'])->name('oppstore');
Route::get('/factureshow/{id}', [OpportuniteController::class, 'factureshow'])->name('factureshow');
Route::get('/facturedownload/{id}', [OpportuniteController::class, 'facturedownload'])->name('facturedownload');
Route::get('/devisshow/{id}', [OpportuniteController::class, 'devisshow'])->name('devisshow');
Route::get('/devisdownload/{id}', [OpportuniteController::class, 'devisdownload'])->name('devisdownload');



Route::get('forget', function () {
    return view('frontlogin.forget');});

Route::get('facture', function () {
    return view('facture');
});


Route::get('/prospects', [ProspectController::class, 'index'])->name('indexpro');
Route::get('/prospect-add', [ProspectController::class, 'create'])->name('create');
Route::post('/prospect-add', [ProspectController::class, 'store_prospect'])->name('store_prospect');
Route::get('/prospect/{id}/{action}', [ProspectController::class, 'details'])->name('details');
Route::put('/prospect/{id}', [ProspectController::class, 'update'])->name('update_pro');
Route::delete('/prospects/{id}', [ProspectController::class, 'destroy'])->name('destroy');
Route::get('/prospects-restore/{id}', [ProspectController::class, 'restore'])->name('restore-pro');
Route::get('/prospects-all', [ProspectController::class, 'restore_all'])->name('restore-allpro');
Route::get('/transforme/{id}', [ProspectController::class, 'transforme'])->name('transforme');


Route::get('/admin', [ChartsController::class, 'admin'])->name('admin');
Route::get('/commercial', [ChartsController::class, 'commercial'])->name('commercial');







 Route::get('/', [ChartsController::class, 'front'])->name('front');
 Route::get('/front', [ChartsController::class, 'front'])->name('front');
 Route::get('/showcar', [ChartsController::class, 'showcar'])->name('showcar');
 Route::get('/showteam', [ChartsController::class, 'showteam'])->name('showteam');

 Route::get('/carview/{id}', [ProduitController::class, 'carview'])->name('carview');

Route::get('/front-office/login', function () {
return view('front-office/login');
});

Route::get('/front-office/contact', function () {
return view('front-office/contact');
});

Route::get('/carview', function () {
    return view('front-office/carview');
    });






// Route::get('/admin', function () {
//     session_start();
//     if(isset($_SESSION['admin']))
//         return redirect('/admin');
//     else if(isset($_SESSION['commercial']))
//         return redirect('/commercial');
//     else
//         return view('login.login');
// });



Route::get('/user-profile', function () {
return view('user-profile');
});

Route::post('sendemail', [UtilisateurController::class, 'sendEmail'])->name('sendemail');
Route::get('book-edit/{id}',[ProduitController::class,'bookEdit']);

Route::get('/clients', [ClientController::class, 'index'])->name('indexclient');
Route::get('/client-add', [ClientController::class, 'create'])->name('create');
Route::post('/client-add', [ClientController::class, 'store'])->name('store');
Route::get('/clientView/{id}/{action}', [ClientController::class, 'edite'])->name('showrendez');
Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('update');
Route::delete('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('destroy');
Route::get('/client/restore/{id}', [ClientController::class, 'restore'])->name('restore');
Route::get('/client/restore-all', [ClientController::class, 'restore_all'])->name('restore-all');
Route::put('/client/update_by_contact/{id}', [ClientController::class, 'update_by_contact'])->name('update_by_contact');


Route::get('/rendez', [RendezController::class, 'index'])->name('index-rendez');
Route::get('/rendez/create', [RendezController::class, 'create'])->name('create-rendez');
Route::post('/rendez/store', [RendezController::class, 'store'])->name('store-rendez');
Route::get('/rendezView/{id}/{action}', [RendezController::class, 'edite'])->name('edite');
Route::put('/rendez/update/{id}', [RendezController::class, 'update'])->name('update-rendez');
Route::delete('/rendez/destroy/{id}', [RendezController::class, 'destroy'])->name('destroy-rendez');
Route::get('/rendez-restore/{id}', [RendezController::class, 'restore'])->name('rendez-restore');
Route::get('/rendez-all', [RendezController::class, 'restore_all'])->name('rendez-all');

Route::get('/rendez/creater/{societe}', [RendezController::class, 'creater'])->name('creater');
Route::get('/createrendez/{id}', [RendezController::class, 'createrendez'])->name('createrendez');
Route::post('/rendezstore', [RendezController::class, 'rendezstore'])->name('rendezstore');
Route::post('/rendez/store2', [RendezController::class, 'store2'])->name('store-rendez2');


Route::get('/produits', [ProduitController::class, 'index'])->name('indexproduit');
Route::get('produits-add',[ProduitController::class, 'create'])->name('create');
Route::post('produit/store',[ProduitController::class, 'store'])->name('store-produit');
Route::get('produit/{id}/{action}',[ProduitController::class, 'edite'])->name('edite');
Route::put('produits/update/{id}',[ProduitController::class, 'update'])->name('update-produit');
Route::delete('produits/destroy/{id}', [ProduitController::class, 'destroy'])->name('destroy');
Route::get('produits-restore/{id}', [ProduitController::class, 'restore'])->name('produit-restore');
Route::get('produits-all', [ProduitController::class, 'restore_all'])->name('produit-all');




Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('index');
Route::get('/utilisateurs-add',[UtilisateurController::class, 'create'])->name('create');
Route::post('utilisateurs/store',[UtilisateurController::class, 'store'])->name('store-ut');
Route::get('utilisateur/{id}/{action}',[UtilisateurController::class, 'edite'])->name('edite'); 
Route::put('utilisateurs/update/{id}',[UtilisateurController::class, 'update'])->name('update-ut');
Route::delete('utilisateurs/destroy/{id}', [UtilisateurController::class, 'destroy'])->name('destroy-ut');

Route::get('user-profile/{id}', [UtilisateurController::class, 'profile'])->name('user-profile');
Route::put('edite_profile/{id}', [UtilisateurController::class, 'edite_profile'])->name('edite_profile');
Route::put('edite_photo/{id}', [UtilisateurController::class, 'edite_photo'])->name('edite_photo');
Route::put('edite_logo/{id}', [UtilisateurController::class, 'edite_logo'])->name('edite_logo');

//Authentification
//Route::get('/log', [AuthController::class, 'login'])->name('login');
Route::post('verifier', [AuthController::class, 'verifier'])->name('verifier');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




//  Route::get('/forget', [PasswordController::class, 'forget'])->name('forget');
// Route::get('/user-profile/{id}', [PasswordController::class, 'profile'])->name('profile');


Route::put('changepassword/{id}', [PasswordController::class, 'changepassword'])->name('changepassword');
Route::get('forget-password', [PasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forget-password', [PasswordController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm'); 
Route::get('reset-password/{token}', [PasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [PasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('forget', [PasswordController::class, 'submitForgetPasswordFormfront'])->name('forget.password'); 
Route::get('reset-password1/{token}', [PasswordController::class, 'showResetPasswordFormfront'])->name('reset.password1');
Route::post('reset-password1', [PasswordController::class, 'submitResetPasswordFormfront'])->name('reset.password2');