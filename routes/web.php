<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| zakaria
*/
// hello this test of adding from another device mohammed lachir
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

// Routes pour Rooms (Gestion des chambres)
Route::resource('rooms', RoomController::class);

// Routes pour Activities (Gestion des activités)
Route::resource('activities', ActivityController::class);

// Routes pour Bookings (Gestion des réservations)
Route::resource('bookings', BookingController::class);

// Routes pour Reviews (Gestion des avis)
Route::resource('reviews', ReviewController::class);

// Routes pour Users (Gestion des utilisateurs)
Route::resource('users', UserController::class);

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', function () {
    return view('bars.HomePage');
})->name('home.page');

Route::get('/About', function () {
    return view('bars.AboutUsPage');
})->name('about');

Route::get('/Activities/Listings', function () {
    return view('bars.ActivitiesListingsPage');
})->name('activities.listings');

Route::get('/Activity/Page', function () {
    return view('bars.ActivityPage');
})->name('activity.page');

Route::get('/Contact/us/Page', function () {
    return view('bars.ContactUsPage');
})->name('contact.us');

Route::get('/Dashboard/overview', function () {
    return view('bars.DashboardOverview');
})->name('dashboard.overview');

Route::get('/Featured/activities', function () {
    return view('bars.FeaturedActivities');
})->name('featured.activities');

Route::get('/Featured/reviews', function () {
    return view('bars.FeaturedReviews');
})->name('featured.reviews');

Route::get('/Featured/rooms', function () {
    return view('bars.FeaturedRooms');
})->name('featured.rooms');

Route::get('/Footer', function () {
    return view('bars.Footer');
})->name('footer');

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

Route::get('/navigation/bare', function () {
    return view('bars.navigationBare');
})->name('navigation.bare');

Route::get('/profile/page', function () {
    return view('bars.ProfilePage');
})->name('profile.page');

Route::get('/registration/page', function () {
    return view('bars.RegistrationPage');
})->name('registration.page');

Route::get('/room/page', function () {
    return view('bars.RoomPage'); 
})->name('room.page');


Route::get('/room/listings', function () {
    return view('bars.roomsListingsPage');
})->name('room.listings');

Route::get('/sidebar', function () {
    return view('bars.SidebarMenu');
})->name('sidebar');

Route::get('/confirmmation', function () {
    return view('bars.confirmmation');
})->name('confirmmation');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';









