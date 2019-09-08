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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'vue'],function(){
    Route::get('/01', function(){
        return view('vue_test.vue_01');
    });
    Route::get('/02', function(){
        return view('vue_test.vue_02');
    });
    Route::group(['prefix'=>'step4'],function (){
        Route::get('/03', function(){
            return view('vue_test.step1.vue_03');
        });
        Route::get('/04', function(){
            return view('vue_test.step1.vue_04');
        });
    });
    Route::group(['prefix'=>'step5'],function (){
        Route::get('/01', function(){
            return view('vue_test.step5.vue_01');
        });
        Route::get('/02', function(){
            return view('vue_test.step5.vue_02');
        });
    });
});
