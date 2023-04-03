<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LangingPageController;
use App\Http\Controllers\Dashboard\AdminController;

use App\Http\Controllers\authentication\RegisterController;
use App\Http\Controllers\authentication\LoginController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DashBoardComponents\ProfileController;
use App\Http\Controllers\Dashboard\PatientController;

use App\Http\Controllers\DashBoardComponents\AppointmentController;

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


Route::get('patient/records', [PatientController::class, 'PatientsRecord']);

Route::get('add/new/patient', [PatientController::class, 'AddNewPatient']);
Route::post('add/new/patientHandler', [PatientController::class, 'AddNewPatientHandler']);


Route::get('Add/View/Admin', [AdminController::class, 'ViewAddAdmin']);
Route::get('Add/View/Doctor', [AdminController::class, 'ViewAddDoctor']);
Route::get("delete/admin/doctor/{id}", [AdminController::class, 'DeleteAdminDoctor']);


Route::get('appointments', [AppointmentController::class, 'Appointments']);