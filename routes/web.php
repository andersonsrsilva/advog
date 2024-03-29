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

    Route::get('cidade/{uf}', 'CityController@citiesPerState')->name('cities.per-uf');

    Route::get('perfil', 'ProfileController@index')->name('profile');
    Route::post('perfil', 'ProfileController@update')->name('profile.update');

    Route::get('clientes', 'CustomerController@index')->name('customers');
    Route::get('clientes/novo', 'CustomerController@create')->name('customers.create');
    Route::post('clientes/salvar', 'CustomerController@store')->name('customers.store');
    Route::get('clientes/{id}', 'CustomerController@show')->name('customers.show');
    Route::get('clientes/{id}/editar', 'CustomerController@edit')->name('customers.edit');
    Route::put('clientes/{id}', 'CustomerController@update')->name('customers.update');
    Route::delete('clientes/excluir', 'CustomerController@destroy')->name('customers.destroy');
    Route::get('clientes/cpf/{cpf}', 'CustomerController@findPerCpf')->name('customers.per-cpf');

    Route::get('usuarios', 'UserController@index')->name('users');
    Route::get('usuarios/restore', 'UserController@restore')->name('users.restore');
    Route::get('usuarios/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    Route::get('usuarios/{user}', 'UserController@show')->name('users.show');
    Route::get('usuarios/{user}/editar', 'UserController@edit')->name('users.edit');
    Route::put('usuarios/{user}', 'UserController@update')->name('users.update');
    Route::any('usuarios/excluir', 'UserController@destroy')->name('users.destroy');


    Route::get('processos/upload', 'LegalProceedingController@upload')->name('legal-proceeding.upload');
    Route::post('processos/uploaded', 'LegalProceedingController@uploaded')->name('legal-proceeding.upload.store');

    Route::get('processos', 'LegalProceedingController@index')->name('legal-proceeding');
    Route::get('processos/novo', 'LegalProceedingController@create')->name('legal-proceeding.create');
    Route::get('processos/{id}', 'LegalProceedingController@show')->name('legal-proceeding.show');
    Route::get('processos/{id}/editar', 'LegalProceedingController@edit')->name('legal-proceeding.edit');
    Route::put('processos/{id}', 'LegalProceedingController@update')->name('legal-proceeding.update');
    Route::delete('processos/excluir', 'LegalProceedingController@destroy')->name('legal-proceeding.destroy');
    Route::get('processos/{id}/incluir-numero-processo', 'LegalProceedingController@number')->name('legal-proceeding.number');
    Route::post('processos/salvar', 'LegalProceedingController@store')->name('legal-proceeding.store');
    Route::post('processos/gerar-pdf', 'LegalProceedingController@buildPDF')->name('legal-proceeding.buildPDF');
});
