<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RendezController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\OpportuniteController;
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
 Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroy');

 Route::get('/front-office/{id}', [ContactController::class, 'contact_details'])->name('contact_details');



 Route::get('/opportunites', [OpportuniteController::class, 'index'])->name('index');
 Route::get('/opportunites-add', [OpportuniteController::class, 'create'])->name('create');
 Route::post('/opportunites-add', [OpportuniteController::class, 'store_opportunite'])->name('store_opportunite');
 Route::get('/opportunite/{id}', [OpportuniteController::class, 'details'])->name('details');
 Route::put('/opportunite/{id}', [OpportuniteController::class, 'update'])->name('update');
 Route::delete('/opportunites/{id}', [OpportuniteController::class, 'destroy'])->name('destroy');





Route::get('/', function () {
    return view('admin');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/prospects', function () {
    return view('prospects/prospects');
});

Route::get('/prospect', function () {
    return view('prospects/prospect');
});

Route::get('/prospect-add', function () {
    return view('prospects/prospect-add');
});

// Route::get('/contacts', function () {
//     return view('contacts/contacts');
// });

// Route::get('/contact-add', function () {
//     return view('contacts/contact-add');
// });

// Route::get('/contact', function () {
//     return view('contacts/contact');
// });

// Route::get('/front-office', function () {
//     return view('front-office');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

/*Route::get('/opportunites', function () {
    return view('opportunites/opportunites');
});

Route::get('/opportunite', function () {
    return view('opportunites/opportunite');
});

Route::get('/opportunites-add', function () {
    return view('opportunites/opportunites-add');

    
});*/




  Route::get('/clients', [ClientController::class, 'index'])->name('index');
  Route::get('/client-add', [ClientController::class, 'create'])->name('create');
  Route::post('/client-add', [ClientController::class, 'store'])->name('store');
  Route::get('/clientView/{id}', [ClientController::class, 'edite'])->name('show');
  Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('update');
  Route::delete('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('destroy');




  Route::get('/rendez', [RendezController::class, 'index'])->name('index-rendez');
 Route::get('/rendez/create', [RendezController::class, 'create'])->name('create-rendez');
  Route::post('/rendez/store', [RendezController::class, 'store'])->name('store-rendez');
 Route::get('/rendezView/{id}', [RendezController::class, 'edite'])->name('show2');
 Route::put('/rendez/update/{id}', [RendezController::class, 'update'])->name('update-rendez');
Route::delete('/rendez/destroy/{id}', [RendezController::class, 'destroy'])->name('destroy-rendez');




//*************************************************************** */

Route::get('/produits', [ProduitController::class, 'index'])->name('index');
Route::get('produits-add',[ProduitController::class, 'create'])->name('create');
<<<<<<< HEAD
Route::post('produit/store',[ProduitController::class, 'store'])->name('store');
Route::get('produits/edite/{id}',[ProduitController::class, 'edite'])->name('edite');

=======
Route::post('produit/store',[ProduitController::class, 'store_produit'])->name('store_produit');
Route::get('produit/edite/{id}',[ProduitController::class, 'edite'])->name('edite');
>>>>>>> 704ad08464b7e93e5556ce247f688f9542f5f19d

Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('index');
Route::get('utilisateurs-add',[UtilisateurController::class, 'create'])->name('create');
Route::post('utilisateurs/store',[UtilisateurController::class, 'store'])->name('store');
Route::get('utilisateurs/edite/{id}',[UtilisateurController::class, 'edite'])->name('edite');
