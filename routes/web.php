<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController; // Assurez-vous que ce contrôleur existe
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes pour les pages statiques
Route::get('/', function () {
    return view('bars.HomePage');
})->name('home.page');

Route::get('/about', function () {
    return view('bars.AboutUsPage');
})->name('about.page');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');

// Routes protégées pour le dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Routes pour les ressources
Route::resource('rooms', RoomController::class);
Route::resource('activities', ActivityController::class);
Route::resource('bookings', BookingController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('users', UserController::class);

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour la gestion de la page d'accueil

Route::get('/manage/homepage', function () {
    return view('bars.HomePageManagement');
})->name('manage.homepage');

// Autres routes
Route::get('/home/page', function () {
    return view('bars.homepage');
})->name('home.page');

Route::get('/manage/activities', function () {
    return view('bars.ManageActivities');
})->name('manage.activities');

Route::get('/manage/bookings', function () {
    return view('bars.ManageBookings');
})->name('manage.bookings');

Route::get('/manage/reviews', function () {
    return view('bars.ManageReviews');
})->name('manage.reviews');

Route::get('/manage/rooms', function () {
    return view('bars.ManageRooms');
})->name('manage.rooms');

Route::get('/manage/users', function () {
    return view('bars.ManageUsers');
})->name('manage.users');

// Autres pages de gestion et de profil
Route::get('/profile/page', function () {
    return view('bars.ProfilePage');
})->name('profile.page');

Route::get('/registration/page', function () {
    return view('bars.RegistrationPage');
})->name('registration.page');

Route::get('/room/page', function () {
    return view('bars.RoomPage');
})->name('room.page');

// Autres routes
Route::get('/sidebar', function () {
    return view('bars.SidebarMenu');
})->name('sidebar');

Route::get('/confirmmation', function () {
    return view('bars.confirmmation');
})->name('confirmmation');

require __DIR__.'/auth.php';
