<?php

use App\Http\Controllers\AdminIssueParametersController;
use App\Http\Controllers\AdminLawnIssuesController;
use App\Http\Controllers\AdminRoutesController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\ApplicationRoutesController;
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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminRoutesController::class, 'login'])->name('admin.login');
    Route::post('/auth', [AdminRoutesController::class, 'auth'])->name('admin.auth');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [AdminRoutesController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminRoutesController::class, 'logout'])->name('admin.logout');

        Route::resource('issues', AdminLawnIssuesController::class)->only([
            'index', 'show', 'store', 'update', 'destroy'
        ])->names([
            'index' => 'admin.issues.index',
            'show' => 'admin.issues.show',
            'store' => 'admin.issues.store',
            'update' => 'admin.issues.update',
            'destroy' => 'admin.issues.destroy',
        ]);
        Route::resource('parameters', AdminIssueParametersController::class)->only([
            'index', 'show', 'store', 'update', 'destroy'
        ])->names([
            'index' => 'admin.parameters.index',
            'show' => 'admin.parameters.show',
            'store' => 'admin.parameters.store',
            'update' => 'admin.parameters.update',
            'destroy' => 'admin.parameters.destroy',
        ]);
        Route::resource('users', AdminUsersController::class)->only([
            'index', 'show', 'store', 'update', 'destroy'
        ])->names([
            'index' => 'admin.users.index',
            'show' => 'admin.users.show',
            'store' => 'admin.users.store',
            'update' => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]);
    });
});


Route::post('/auth', [AdminRoutesController::class, 'auth']);
Route::get('/', [ApplicationRoutesController::class, 'home'])->name('home');
