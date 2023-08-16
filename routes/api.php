<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/token', [ApiTokenController::class, 'create']);
    Route::delete('/token', [ApiTokenController::class, 'deleteAll']);
    Route::delete('/token/{tokenId}', [ApiTokenController::class, 'deleteToken']);

    Route::get('/issues', [IssueController::class, 'list']);
    Route::post('/issues', [IssueController::class, 'create']);
    Route::get('/issues/{lawnIssue}', [IssueController::class, 'get']);
    Route::put('/issues/{lawnIssue}', [IssueController::class, 'update']);
    Route::delete('/issues/{lawnIssue}', [IssueController::class, 'delete']);

    //Route::post('/user/avatar', [UserController::class, 'uploadAvatar']);
});
Route::get('/issues', [IssueController::class, 'list']);

Route::post('/register', [UserController::class, 'register']);
Route::get('/user/avatar', [UserController::class, 'avatar']);
