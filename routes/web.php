<?php
//import article 
namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/user', function () {
    return view('layouts.uts-layout');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $posts = Article::with('user')->get();
        return view('dashboard', ['article' => $posts]);
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
require __DIR__.'/auth.php';

// Route::controller('auth') -> group(function () {
//     Route::get('/articles', [ProfileController::class, 'show'])->name('profile.show');
//     Route::resource('articles', ArticleController::class);
// });
// Route::get('articles', 'ArticleController@show');
// Route::get('/showAll', 'App\Http\Controllers\CompaniesController@showAll');
Route::resource('articles', ArticleController::class)->middleware(['auth', 'verified']);
Route::resource('companies', CompaniesController::class)->middleware(['auth', 'verified']);


