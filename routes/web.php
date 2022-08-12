<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\StaticPage;
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


# Home
Route::get('/', [StaticPage::class, 'index'])->name('user-home');

# Login and Register
Route::get('/signin', [User::class, 'index'])->name('signin');
Route::get('/signup', [User::class, 'signup'])->name('signup');

# Static Page
Route::get('/about', [StaticPage::class, 'about'])->name('about');
Route::get('/events', [StaticPage::class, 'events'])->name('events');
Route::get('/contactus', [StaticPage::class, 'contactus'])->name('contactus');
Route::get('/developers', [StaticPage::class, 'developers'])->name('developers');
Route::get('/sponsors', [StaticPage::class, 'sponsors'])->name('sponsors');
Route::get('/news', [StaticPage::class, 'news'])->name('news');
Route::get('/feedback', [StaticPage::class, 'feedback'])->name('feedback');
Route::get('/gallery', [StaticPage::class, 'gallery'])->name('gallery');