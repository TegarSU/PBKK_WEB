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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/form', 'formController@index');
Route::get('/calculator', function (Request $request) {
    return view('calculator');
});

Route::post('/calculator', function (Request $request) {
	$satu = $request->input('angka1');
	$dua = $request->input('angka2');
	$op = $request->input('operator');

	if($op == '+')
	{
		$hasil = $satu + $dua;
	}

	//dd($hasil);

    return view('calculator', compact('hasil'));
});


// Route::get('mahasiswa/{id}/delete', 'mhsController@destroy')->name('mahasiswa.destroy');
// // Route::resource('projects', 'Admin\ProjectsController', ['except' => 'destroy']);
// Route::resource('mahasiswa','mhsController', ['except' => 'destroy']);
Route::resource('mahasiswa','mhsController');
Route::resource('dosen','dsnController');
Route::resource('mata_kuliah','mklController');
Route::resource('frs','frsController');
Route::resource('kelas','frsController');

// Route::get('/calculator', 'FormController@calculator');
Route::post('/formSubmit', 'formController@submit')->name('form.submit');
Route::get('/hasil');
