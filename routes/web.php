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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $links = \App\Link::all();
    $patients = \App\Demographic::all();
    return view('welcome', ['links' => $links, 'patients' => $patients]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Links
 */
Route::get('/add_links', 'LinkController@add_links_page');
Route::get('/update_links', 'LinkController@update_links_page');
Route::get('/delete_links', 'LinkController@delete_links_page');

Route::post('/insert_links', 'LinkController@insert');
Route::post('/update_links', 'LinkController@update');
Route::post('/delete_links', 'LinkController@delete');

//Route::get('/add_links', function () {
//    return view('add_links');
//});

//END Links


/*
 * Patients
 */
Route::get('/add_patients', 'DemographicController@add_patients_page');
Route::get('/update_patients', 'DemographicController@update_patients_page');
Route::get('/delete_patients', 'DemographicController@delete_patients_page');

Route::post('/insert_patients', 'DemographicController@insert');
Route::post('/update_patients', 'DemographicController@update');
Route::post('/delete_patients', 'DemographicController@delete');

//END Patients

