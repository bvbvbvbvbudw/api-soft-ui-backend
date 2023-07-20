<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AvatarController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ComTaskUserController;
use App\Http\Controllers\Api\CsrfController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\FindUserController;
use App\Http\Controllers\Api\InformationTaskController;
use App\Http\Controllers\Api\PhotoTaskController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ProjectUserAccessController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\TaskCommentController;
use App\Http\Controllers\Api\TaskDescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/avatar', [AvatarController::class, 'upload']);
    Route::post('/task-photo', [PhotoTaskController::class, 'upload']);
    Route::post('/favorite', [FavoriteController::class, 'toggleFavorite']);

    Route::get('/users', [ProfileController::class, 'index']);
    Route::get('/findUser', [FindUserController::class, 'index']);
    Route::get('/avatarLoad', [AvatarController::class, 'send']);
    Route::get('/task-photo-get', [PhotoTaskController::class, 'send']);
    Route::get('/csrf-cookie', [CsrfController::class, 'setCsrfCookie']);
    Route::get('/favorite/toggle', [FavoriteController::class, 'checkFavorite']);
    Route::get('/currentTask', [TaskController::class, 'currentTask']);

    Route::apiResource('/information-task', InformationTaskController::class);
    Route::apiResource('/commenttaskuser', ComTaskUserController::class);
    Route::apiResource('/projects', ProjectController::class);
    Route::apiResource('/projectadduser', ProjectUserAccessController::class);
    Route::apiResource('/task_comment', TaskCommentController::class);
    Route::apiResource('/status', StatusController::class);
    Route::apiResource('/task', TaskController::class);
    Route::apiResource('/comment', CommentController::class);
    Route::apiResource('/description-task', TaskDescriptionController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/check-authentication', function (Request $request) {
    return response()->json(['message' => 'Authenticated']);
});
