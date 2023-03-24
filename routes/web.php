<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangingPageController;
use App\Http\Controllers\LandingPageComponents\HomeController;
use App\Http\Controllers\LandingPageComponents\AboutController;

use App\Http\Controllers\authentication\RegisterController;
use App\Http\Controllers\authentication\LoginController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DashBoardComponents\ProfileController;
use App\Http\Controllers\TrailController;
use App\Http\Controllers\authentication\AuthController;
use App\Http\Controllers\Dashboard\PatientController;

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

Route::get('/', [LangingPageController::class, 'LangingPage']);

Route::get('trail', [TrailController::class, 'index']);

// Route::get('home', [HomeController::class, 'Home']);
// Route::get('aboutus', [AboutController::class, 'About']);
Route::get('/registerForm', [RegisterController::class, 'Register']);
Route::post('registerHandler', [RegisterController::class, 'RegisterHandler']);
Route::get('login', [LoginController::class, 'Login']);
Route::post('login', [LoginController::class, 'LoginHandler']);

Route::get('logout', [LogoutController::class, 'Logout']);

Route::get('dashboard', [DashboardController::class, 'Dashboard']);

//get profile detials of the loged in user
Route::get('profile', [ProfileController::class, 'index']);
Route::post('profileUpdate/{id}', [ProfileController::class, 'Update1']);
Route::get('trail22', [AuthController::class, 'trail']);

Route::get('patient/records', [PatientController::class, 'PatientsRecord']);