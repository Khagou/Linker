<?php

use App\Models\Link;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/accueil',[
        'links' => Link::all()
    ]);

});

Route::post('/addLink', function () {
    Link::create([
        'nom' => request('nom'),
        'lien' => request('lien')
    ]);
    return redirect ('/');
});

Route::get('/l/{id}/afficher', function ($id) {
    $links = Link::find($id);

    return view ('link', [
        'lien' => $links
    ]);
});

// Route::get('/l/{id}', function ($link) {
//     return redirect ($link->lien);
// });
