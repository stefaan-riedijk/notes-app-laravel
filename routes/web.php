<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('notes','notes.index')
    ->middleware(['auth', 'verified'])
    ->name('notes');

Route::view('notes/create','notes.create')
    ->middleware(['auth', 'verified'])
    ->name('notes.create');

Route::get('notes/{note}', function (Post $note) {
    $user = $note->user;
    return view('notes.view',['note'=>$note,'user'=>$user]);
})->name('notes.view');

require __DIR__.'/auth.php';