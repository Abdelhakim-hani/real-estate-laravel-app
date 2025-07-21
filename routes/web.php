<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController as ControllersPropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

Route::get('/recherche', [PropertyController::class, 'search'])->name('properties.search');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
// Display form to create a new property
Route::get('/biens/ajouter', [\App\Http\Controllers\PropertyController::class, 'create'])->name('property.create');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin/properties/search', [PropertyController::class, 'search'])->name('admin.properties.search');

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('/biens')->controller(ControllersPropertyController::class)->name('property.')->group(function () {
    $idRegex = '[0-9]+';
    $slugRegex = '[0-9a-z\-]+';
    Route::get('/', 'index')->name('index');
    Route::get('/{slug}/{property}', 'show')->name('show')->where([
        'slug' => $slugRegex,
        'property' => $idRegex
    ]);
    Route::post('/{property}/contact', 'contact')->name('contact')->where([
        'property' => $idRegex
    ]);
});

Route::get('/admin/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'authentificate']);
Route::delete('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::resource('property', PropertyController::class)->except('show');
    Route::resource('option', OptionController::class)->except('show');
});

// Page: À propos
Route::get('/a-propos', function () {
    return view('about'); // Make sure you have a Blade view file named about.blade.php
})->name('about');

// Page: Services
Route::get('/services', function () {
    return view('services');
})->name('services');

// Page: Blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Page: Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Auth - Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Auth - Login
//Route::get('/login', function () {
  //  return view('auth.login');
//})->name('login');
