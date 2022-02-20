<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myapi;

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

Route:: post("GetData",[Myapi::class,"ApiData"]);
Route:: view('add','addMember');
Route:: view('list','list');
Route:: get("data",[Myapi::class,"show"]);
Route:: get("delete/{id}",[Myapi::class,"delete"]);
Route:: get("edit/{id}",[Myapi::class,"showData"]);
Route:: post("edit",[Myapi::class,"update"]);
Route:: view('edit','edit');
