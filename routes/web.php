<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RendezController;

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
 Route::post('/contact-add', [ContactController::class, 'store'])->name('store');
 Route::get('/contact/{id}', [ContactController::class, 'details'])->name('details');
 Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update');
 Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroy');

// Route::post('articles', 'ArticleController@store');
// Route::get('articles', 'ArticleController@index');




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

Route::get('/front-office', function () {
    return view('front-office');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/opportunites', function () {
    return view('opportunites/opportunites');
});

Route::get('/opportunite', function () {
    return view('opportunites/opportunite');
});

Route::get('/opportunites-add', function () {
    return view('opportunites/opportunites-add');

    
});


<<<<<<< Updated upstream
//Route::get('/clients', function () {
   
   // return view('clients/client-add');
//});

//Route::get('/clients', function () {
   // return view('clients/clients');
//});
//Route::get('/clients', function () {
   // return view('clients/clientView');
//});
// Route::get('/rendez-vous', function () {
    //return view('rendez-vous/rendezView');
//});
//Route::get('/rendez-vous', function () {
    //return view('rendez-vous/rendez-add');
//});
//Route::get('/rendez-vous', function () {
    //return view('rendez-vous/rendez-vous');
//});//

Route::get('/clients', [ClientController::class, 'index'])->name('index');
//  Route::get('/client-add', [ContactController::class, 'create'])->name('create');
//  Route::post('/client-add', [ContactController::class, 'store'])->name('store');
//  Route::get('/client/{id}', [ContactController::class, 'edite'])->name('edite');
//  Route::put('/clients/{id}', [ContactController::class, 'update'])->name('update');
//  Route::delete('/clients/{id}', [ContactController::class, 'destroy'])->name('destroy');
//Route::get('clients','ClientController@index');
//Route::get('client/create','ClientController@create');
//Route::post('client/store','ClientController@store');
//Route::get('client/edite/{id}','ClientController@edite');
//Route::put('client/update/{id}','ClientController@update');
//Route::delete('client/destroy/{id}','ClientController@destroy');
=======
Route::get('/client-add', function () {
    return view('clients/client-add');
});

Route::get('/clients', function () {
    return view('clients/clients');
});
Route::get('/clientView', function () {
    return view('clients/clientView');
});
Route::get('/rendezView', function () {
    return view('rendez-vous/rendezView');
});
Route::get('/rendez-add', function () {
    return view('rendez-vous/rendez-add');
});
Route::get('/rendez-vous', function () {
    return view('rendez-vous/rendez-vous');
});

Route::get('client','ClientController@index');
Route::get('client/create','ClientController@create');
Route::post('client/store','ClientController@store');
Route::get('client/edite/{id}','ClientController@edite');
Route::put('client/update/{id}','ClientController@update');
Route::delete('client/destroy/{id}','ClientController@destroy');
>>>>>>> Stashed changes

Route::get('rendez','RendezController@index');
Route::get('rendez/create','RendezController@create');
Route::post('rendez/store','RendezController@store');
Route::get('rendez/edite/{id}','RendezController@edite');
Route::put('rendez/update/{id}','RendezController@update');
Route::delete('rendez/destroy/{id}','RendezController@destroy');

