<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SettingController;



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


// Route::get('/', [BookingController::class, 'bookingDefault'])->name('booking');
Route::get('/', [BookingController::class, 'bookingLanding'])->name('bookingLanding');
Route::view('/bookingdev', 'landing.bookingdev');
Route::view('/bookingpromise', 'landing.bookingpromise');
Route::view('/dashboarduser', 'landing.devui.dashboard-user');
Route::get('/history', [BookingController::class, 'userLanding'])->name('userLanding')->middleware('auth');
Route::post('/', [BookingController::class, 'storeBookingLanding'])->name('storeBookingLanding')->middleware('auth');
Route::get('/result', [BookingController::class, 'showResult'])->name('showResult')->middleware('auth');
Route::get('/showBooking/{id}', [BookingController::class, 'showBooking'])->name('showBooking')->middleware('auth');


Route::view('/member', 'landing.memberLanding');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/operator/dashboard', [HomeController::class, 'operatorHome'])->name('operatorHome')->middleware('is_admin');
Route::get('/doctor/dashboard', [HomeController::class, 'doctorHome'])->name('doctorHome')->middleware('is_admin');
Route::get('operator/booking', [BookingController::class, 'bookingOpr'])->name('bookingOpr');
Route::get('operator/booking/edit/{id}', [BookingController::class, 'editOpr'])->name('bookingOprEdit');
Route::put('operator/booking/edit/{booking}', [BookingController::class, 'updateOpr'])->name('updateOpr');
Route::get('operator/booking/show/{id}', [BookingController::class, 'showOpr'])->name('showOpr');
Route::get('/komfirmasi', [BookingController::class, 'showKomfirmasi'])->name('showKomfirmasi');
Route::get('/editKomfirmasi/{id}', [BookingController::class, 'editKomfirmasi'])->name('editKomfirmasi');
Route::put('/editKomfirmasi/{booking}', [BookingController::class, 'updateKomfirmasi'])->name('updateKomfirmasi');

Route::get('admin/users', [ManageUserController::class, 'index'])->name('manageusers')->middleware('is_admin');
Route::get('profile/edit/{id}', [ManageUserController::class, 'editProfile'])->name('editProfile')->middleware('auth');
Route::get('profile/', [ManageUserController::class, 'indexUser'])->name('indexUser')->middleware('auth');
Route::put('profile/update/{user}', [ManageUserController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');

Route::resource('admin/category_services', CategoryServiceController::class);
Route::resource('admin/service', ServiceController::class);
Route::resource('admin/doctor', DoctorController::class);
Route::resource('admin/booking', BookingController::class);
Route::resource('admin/setting', SettingController::class);

Route::get('print_booking', [BookingController::class, 'print_booking'])->name('print_booking');
Route::get('laporan_booking', [BookingController::class, 'laporan_booking'])->name('laporan_booking');

Route::get('GetSubCatAgainstMainCatEdit/{id}', [DoctorController::class, 'GetSubCatAgainstMainCatEdit']);

Route::get('GetService/{id}', [BookingController::class, 'GetService']);
Route::get('GetDoctor/{id}', [BookingController::class, 'GetDoctor']);