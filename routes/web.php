<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test-db-connection', function() {
//     try{
//         DB::connection()->getPdo();
//         return 'Koneksi database berhasil';
//     } catch(\Exception $e) {
//         return "tidak dapat terhubung ke database:" . $e->getMessage();
//     }
// });