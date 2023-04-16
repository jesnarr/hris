<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkSchedule;
use App\Http\Controllers\MrfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimelogController;
use App\Http\Controllers\TimeOffController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EligibilityController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TimekeepController;

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


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::prefix('department')->group(function () {
            Route::get('/', [DepartmentController::class, 'index']);
        });

        Route::prefix('employee')->name('employee.')->group(function () {
            Route::get('/{id}', [EmployeeController::class, 'view'])->name('view');
        });

        Route::prefix('position')->group(function () {
            Route::get('/', [PositionController::class, 'index']);
        });

    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/timelog', [DashboardController::class, 'timelog']);


    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
        // Route::get('/{id}', [EmployeeController::class, 'view'])->name('view');
    });

    Route::prefix('schedule')->group(function () {
        Route::get('/', [ScheduleController::class, 'index']);
        Route::get('/view', [ScheduleController::class, 'setSchedule']);
        Route::post('/save_schedule', [ScheduleController::class, 'saveSchedule']);
        Route::post('/action', [ScheduleController::class, 'action']);
    });

    Route::prefix('attendance')->group(function () {
        Route::get('/list', [TimelogController::class, 'index']);
        Route::post('/filter', [TimelogController::class, 'filter']);
    });

    Route::prefix('overtime')->group(function () {
        Route::get('/', [OvertimeController::class, 'index']);
        Route::get('/view/{id}', [OvertimeController::class, 'view']);
        Route::get('/list',[OvertimeController::class, 'index']);

    });

    Route::prefix('dtr')->group(function () {
        Route::get('/list', [TimekeepController::class, 'index']);
        Route::get('/list/view', [TimekeepController::class, 'view']);
        Route::post('/list/employee', [TimekeepController::class, 'getEmployee']);
        Route::post('/list/dtr', [TimekeepController::class, 'getDtr']);
        Route::post('/list/total', [TimekeepController::class, 'getTotal']);



    });

    Route::prefix('salary')->group(function () {
        Route::get('/settings', [SalaryController::class, 'index']);
    });

    Route::prefix('work')->group(function () {
        Route::get('/schedule', [WorkSchedule::class, 'index']);
    });

    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index']);
    });

    Route::prefix('leave')->group(function () {
        Route::get('/', [LeaveController::class, 'index']);
        Route::post('/save-leave', [LeaveController::class, 'saveLeave']);
        Route::post('/update-status', [LeaveController::class, 'updateStatus']);
        Route::post('/delete-status', [LeaveController::class, 'deleteLeave']);
        Route::post('/update-eligibility', [LeaveController::class, 'updateLeaveEligiblity']);
        Route::get('/view/{id}',[LeaveController::class, 'viewLeave']);
    });

    Route::prefix('eligibility')->group(function () {
        Route::post('/delete-user', [EligibilityController::class, 'deleteUser']);
        Route::post('/add-user', [EligibilityController::class, 'saveUser']);
        Route::post('/update-status',[EligibilityController::class,'updateStatus']);
    });


    Route::prefix('image')->group(function () {
        Route::get('/', [ImageController::class, 'create']);
        Route::post('/', [ImageController::class, 'store']);
        Route::get('/{image}',[ImageController::class, 'show']);
    });

    Route::prefix('timeoff')->name('timeoff.')->group(function (){
        Route::get('/',[TimeOffController::class,'index'])->name('index');
        Route::get('/team-off',[TimeOffController::class,'index'])->name('team-off');
        Route::post('/submit-request',[TimeOffController::class,'submitRequest']);
        Route::post('/update-status',[TimeOffController::class,'updateRequest']);
        Route::post('/upload-file',[TimeOffController::class,'uploadFile']);
    });

    Route::prefix('mrf')->group(function () {
        Route::get('/', [MrfController::class, 'index']);
        Route::get('/list',[MrfController::class, 'list']);
        Route::get('/view/{id}',[MrfController::class, 'mrfView']);
        Route::post('/submit_prf', [MrfController::class, 'submit_prf']);
        Route::post('/submitRemarks', [MrfController::class, 'submitRemarks']);
        Route::post('/uploadFile', [MrfController::class, 'uploadFile']);

    });

    Route::prefix('careers-admin')->name('careers.admin.')->group(function () {
        Route::get('/', [CareerController::class, 'adminIndex'])->name('index');
        Route::post('/', [CareerController::class, 'adminStore'])->name('store');
    });

});

Route::middleware(['guest'])->group(function () {
    Route::prefix('careers')->name('careers.')->group(function () {
        Route::get('/', [CareerController::class, 'index'])->name('index');
        Route::get('/{id}', [CareerController::class, 'view'])->name('view');
    });

    Route::prefix('applicant')->name('applicant.')->group(function () {
        Route::post('/', [ApplicationController::class, 'store'])->name('store');
    });
});
