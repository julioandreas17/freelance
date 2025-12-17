<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/update_session', function (Request $request){
    $result = array();
    $result['status'] = 'error';
    $result['message'] = 'Jaringan tidak stabil, silahkan coba lagi';

    $session = $request->get('session');
    if ($session != ''){
        Session::put('id_user', $session);
        $result['status'] = 'success';
        $result['message'] = 'Session sudah di update';
    }else{
        $result['status'] = 'error';
        $result['message'] = 'Session tidak ditemukan';
    }

    return response()->json($result);
})->name('update_session');

Route::get('/', function (){
    return view('template');
})->name('home');

Route::get('/galeri', function (){
    return view('template');
})->name('galeri');

