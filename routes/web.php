<?php
use App\Http\Controllers\DashboardController;
use App\Livewire\Admin\Appointments\CreateAppointmentForm;
use App\Livewire\Admin\Appointments\ListAppointments;
use App\Livewire\Admin\Users\ListUsers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

Route::get('admin/users', ListUsers::class)->name('admin.users');

Route::get('admin/appointments', ListAppointments::class)->name('admin.appointments');

Route::get('admin/appointments/create', CreateAppointmentForm::class)->name('admin.appointments.create');