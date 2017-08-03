<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ortu', function(){
// 	$or= App\Ortu::all();
// 	foreach ($or as $data) {
// 		echo $data->nama_ibu." dengan ";
// 		echo $data->nama_ayah."   ";
// 		foreach($data->anak as $key){
// 			echo"<li>$key->nama</li><br>";
// 		}
// 	}
// });

Route::get('percobaan', 'MyController@index');

Route::get('percobaan1', 'MyController@tampilan');

Route::get('percobaan2', 'MyController@tampilmodel');


Route::resource('ortu','OrangtuaController');
Auth::routes();

Route::resource('anak','anakController');
Auth::routes();

Route::resource('author','AuthorController');
Auth::routes();

Route::resource('book','BookController');
Auth::routes();