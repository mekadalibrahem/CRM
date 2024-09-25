<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as'=> 'admin.'
], function(){

    Route::get('/dashboard' , function(){
        return view('test');
    })->name('dashboard');
    Route::get('/users' , function(){
        return view('test');
    })->name('users');
    Route::get('/clients' , function(){
        return view('test');
    })->name('clients');
    Route::get('/projects' , function(){
        return view('test');
    })->name('projects');
    Route::get('/tasks' , function(){
        return view('test');
    })->name('tasks');
});


