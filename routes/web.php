<?php

Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('city/{uf}', 'CityController@citiesPerUf')->name('cities.per.uf');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('profile', 'ProfileController@update')->name('profile.update');

    Route::get('clientes', 'CustomerController@index')->name('customers');
    Route::get('clientes/novo', 'CustomerController@create')->name('customers.create');
    Route::post('clientes/salvar', 'CustomerController@store')->name('customers.store');
    Route::get('clientes/{id}', 'CustomerController@show')->name('customers.show');
    Route::get('clientes/{id}/editar', 'CustomerController@edit')->name('customers.edit');
    Route::put('clientes/{id}', 'CustomerController@update')->name('customers.update');
    Route::delete('clientes/excluir', 'CustomerController@destroy')->name('customers.destroy');

    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/restore', 'UserController@restore')->name('users.restore');
    Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::any('users/destroy', 'UserController@destroy')->name('users.destroy');

});
