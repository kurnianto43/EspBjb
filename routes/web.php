<?php


Route::get('/', 'LoginController@getLogin')->name('/');
Route::post('/login', 'LoginController@postLogin')->name('login');

Route::get('/noPermission',function(){
	return view('permission.noPermission');
});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout', 'LoginController@getLogout')->name('logout');
	Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
});


Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
	
	Route::get('/profile', 'UserController@profile')->name('profile');
	Route::get('/profile/setting', 'UserController@profileSet')->name('profile.set');
	Route::post('/profile/setting', 'UserController@update_avatar')->name('profile.update');

	Route::get('/gdm-instore', 'GdmController@index')->name('gdm.instore');
	Route::get('/gdm/input', 'GdmController@create')->name('gdm.create');
	Route::post('/gdm/input', 'GdmController@store')->name('gdm.store');
	Route::patch('/gdm/{gdm}/edit', 'GdmController@update')->name('gdm.update');
	Route::get('/gdm/{gdm}/edit', 'GdmController@edit')->name('gdm.edit');

	Route::delete('/gdm/{gdm}/delete', 'GdmController@destroy')->name('gdm.destroy');
	Route::get('/gdm/transfer-gdm', 'GdmController@transfer')->name('gdm.transfer');
	Route::get('/gdm-instore/download-pdf', 'GdmController@downloadPdf')->name('gdm.pdf');
});