<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/collaborateur', 'HomeController@collaborateur')->name('collaborateur');

Route::get('/collaborateurbis', 'HomeController@collaborateurbis')->name('collaborateurbis');

Route::get('/collaborateurc', 'HomeController@collaborateurc')->name('collaborateurc');

Route::get('/collaborateurd', 'HomeController@collaborateurd')->name('collaborateurd');

Route::get('/suivi', 'HomeController@suivi')->name('suivi');

Route::get('/message', 'HomeController@message')->name('message');

Route::get('/modification', 'HomeController@modification')->name('modification');

Route::get('/ajouter', 'HomeController@ajouter')->name('ajouter');

Route::resource('articles','ArticleController');

Route::get('articles','ArticleController@index')->name('articles.index');

Route::get('/generate-pdf', function () {
    return view('pdfview');
});

Route::get('/generate-pdf', 'PdfGenerateController@pdfdata')->name('generate-pdf');


Route::get('my-posts', 'PostController@myPosts');
Route::resource('posts','PostController');

Route::get('/send/email', 'HomeController@mail');

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 