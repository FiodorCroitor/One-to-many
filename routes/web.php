<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $authors = \App\Models\Author::all() ;
    foreach($authors as $author){
        echo 'Authors:' . $author['name'].'<br>';
        foreach($author->books as $book){
           echo 'Books'. $book['title'].'<br>';
        }
    }
});
