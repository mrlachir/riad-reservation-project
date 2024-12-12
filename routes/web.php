<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/', function () {
    return view('bars.HomePage');
})->name('home.manag');

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

Route::get('/login', function () {
    return view('bars.LoginPage');
})->name('login');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
