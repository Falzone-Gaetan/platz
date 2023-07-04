<?php

use App\Http\Controllers\Products;
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

Route::get('/', [\App\Http\Controllers\Products::class, 'index'])->name('home');

Route::get('products/{product}/{slug}.html', [\App\Http\Controllers\Products::class, 'show'])
    ->where('id', '[1-9][0-9]*')
    ->name('products.show');

Route::resource('products' , \App\Http\Controllers\Products::class)
->except('show');

Route::post('/comments', [\App\Http\Controllers\CommentController::class, 'store']);
Route::get('load-more',  [\App\Http\Controllers\Products::class, 'loadMore'])->name('load-more');

Route::get('/filter/{categoryId}', [\App\Http\Controllers\Products::class, 'filter'])->name('products.filter');
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('products.search');
Route::get('/newsletter', [\App\Http\Controllers\NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
