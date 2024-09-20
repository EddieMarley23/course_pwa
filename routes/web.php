<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/anotations', function () {
    return view('anotations');
});

Route::post('/anotations/save', function (\Illuminate\Http\Request $request) {
    // Exibe os dados submetidos (substitua por lógica de salvamento ao seu critério)
    return response()->json([
        'title' => $request->input('title'),
        'description' => $request->input('description')
    ]);
});