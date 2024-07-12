<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('alumnos', 'App\Http\Controllers\AlumnosController@index')->name('alumnos');
Route::get('alumnos/crear', 'App\Http\Controllers\AlumnosController@create')->name('alumnos.create');

Route::post('alumnos', 'App\Http\Controllers\AlumnosController@store')->name('alumnos.store');
Route::get('alumnos/{id}', 'App\Http\Controllers\AlumnosController@show')->name('alumnos.show');

Route::view('contacto', 'contacto')->name('contacto');

