<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\FavoriteController;

use App\Http\Controllers\ProfileController;

route::get('/', [HomeController::class, 'index']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', function () {
    return redirect('/home');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/home', [AdminController::class, 'index']);

route::get('/category_page', [AdminController::class, 'category_page']);

route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/cat_delete/{id}', [AdminController::class, 'cat_delete']);

route::get('/edit_category/{id}', [AdminController::class, 'edit_category']);

route::post('/update_category/{id}', [AdminController::class, 'update_category']);

route::get('/add_book', [AdminController::class, 'add_book']);

route::post('/store_book', [AdminController::class, 'store_book']);

route::get('/show_book', [AdminController::class, 'show_book']);

route::get('/book_delete/{id}', [AdminController::class, 'book_delete']);

route::get('/edit_book/{id}', [AdminController::class, 'edit_book']);

route::post('/update_book/{id}', [AdminController::class, 'update_book']);

route::get('book_details/{id}', [HomeController::class, 'book_details']);

route::get('/borrow_books/{id}', [HomeController::class, 'borrow_books']);

route::get('/borrow_request', [AdminController::class, 'borrow_request']);

route::get('/approve_book/{id}', [AdminController::class, 'approve_book']);

route::get('/return_book/{id}', [AdminController::class, 'return_book']);

route::get('/rejected_book/{id}', [AdminController::class, 'rejected_book']);

route::get('/book_history', [HomeController::class, 'book_history']);

route::get('/cancel_req/{id}', [HomeController::class, 'cancel_req']);

route::get('/explore', [HomeController::class, 'explore']);

route::get('/search', [HomeController::class, 'search']);

route::get('/cat_search/{id}', [HomeController::class, 'cat_search']);

Route::get('/favorites', function () {
    return view('home.favorites');
})->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::post('/favorites', [FavoriteController::class, 'store'])->middleware('auth')->name('favorites.store');

Route::get('/add_favorite/{id}', [FavoriteController::class, 'addFavorite'])->name('add.favorite');
Route::get('/favorite_books', [FavoriteController::class, 'showFavorites'])->name('favorites.list');
