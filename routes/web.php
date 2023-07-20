<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationTaskController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\PhotoTaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectUserAccessController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\TaskDescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CommentController;

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
Route::get('apidoca', function () {
    return view('apiDoc.apidoca');
})->name('apidoca');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

//	Route::get('tables', function () {
//		return view('tables');
//	})->name('tables');

//    Route::get('/tables', [TaskController::class, 'index'])->name('tables.index'); // task


    Route::get('/status', [StatusController::class, 'index'])->name('status.index');
    Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
    Route::post('/status/', [StatusController::class, 'store'])->name('status.store');
    Route::get('/status/{id}/', [StatusController::class, 'show'])->name('status.show');
    Route::get('/status/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
    Route::put('/status/{id}/update', [StatusController::class, 'update'])->name('status.update');
    Route::delete('/status/{id}/destroy', [StatusController::class, 'destroy'])->name('status.destroy');

    Route::get('/task', [TaskController::class, 'index'])->name('task.index');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/', [TaskController::class, 'store'])->name('task.store');
    Route::get('/task/{id}/', [StatusController::class, 'show'])->name('task.show');
    Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('/task/{id}/update', [TaskController::class, 'update'])->name('task.update');
    Route::delete('/task/{id}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');



    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles', [RoleController::class, 'store'])->name('roles.store');


    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}/update', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}/destroy', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::delete('/role/{id}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
    Route::get('/adduser/create', [ProjectUserAccessController::class, 'create'])->name('adduser.create');
    Route::post('/adduser/', [ProjectUserAccessController::class, 'store'])->name('adduser.store');



    Route::get('/comments', [TaskCommentController::class, 'index'])->name('comments.index');
    Route::get('/comments/create', [TaskCommentController::class, 'create'])->name('comments.create');
    Route::post('/comments/', [TaskCommentController::class, 'store'])->name('comments.store');
    Route::get('/comments/{id}/', [TaskCommentController::class, 'show'])->name('comments.show');
    Route::get('/comments/{id}/edit', [TaskCommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}/update', [TaskCommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{id}/destroy', [TaskCommentController::class, 'destroy'])->name('comments.destroy');



    Route::get('/avatars', [AvatarController::class, 'index'])->name('avatars.index');
    Route::post('/avatars/{id}', [AvatarController::class, 'update'])->name('avatars.update');
    Route::post('/avatars/{id}/destroy', [ProfileController::class, 'destroy'])->name('avatars.destroy');

    Route::get('/taskdesc', [TaskDescriptionController::class, 'index'])->name('taskdesc.index');
    Route::get('/taskdesc/create', [TaskDescriptionController::class, 'create'])->name('taskdesc.create');
    Route::post('/taskdesc/', [TaskDescriptionController::class, 'store'])->name('taskdesc.store');
    Route::get('/taskdesc/{id}/', [TaskDescriptionController::class, 'show'])->name('taskdesc.show');
    Route::get('/taskdesc/{id}/edit', [TaskDescriptionController::class, 'edit'])->name('taskdesc.edit');
    Route::put('/taskdesc/{id}/update', [TaskDescriptionController::class, 'update'])->name('taskdesc.update');
    Route::delete('/taskdesc/{id}/destroy', [TaskDescriptionController::class, 'destroy'])->name('taskdesc.destroy');

    Route::get('/informationTask', [InformationTaskController::class, 'index'])->name('informationTask.index');
    Route::get('/informationTask/create', [InformationTaskController::class, 'create'])->name('informationTask.create');
    Route::post('/informationTask/', [InformationTaskController::class, 'store'])->name('informationTask.store');
    Route::get('/informationTask/{id}/', [InformationTaskController::class, 'show'])->name('informationTask.show');
    Route::get('/informationTask/{id}/edit', [InformationTaskController::class, 'edit'])->name('informationTask.edit');
    Route::put('/informationTask/{id}/update', [InformationTaskController::class, 'update'])->name('informationTask.update');
    Route::delete('/informationTask/{id}/destroy', [InformationTaskController::class, 'destroy'])->name('informationTask.destroy');

    Route::get('/photoTask', [PhotoTaskController::class, 'index'])->name('photoTask.index');
    Route::get('/photoTask/create', [PhotoTaskController::class, 'create'])->name('photoTask.create');
    Route::post('/photoTask/', [PhotoTaskController::class, 'store'])->name('photoTask.store');
    Route::get('/photoTask/{id}/', [PhotoTaskController::class, 'show'])->name('photoTask.show');
    Route::get('/photoTask/{id}/edit', [PhotoTaskController::class, 'edit'])->name('photoTask.edit');
    Route::put('/photoTask/{id}/update', [PhotoTaskController::class, 'update'])->name('photoTask.update');
    Route::delete('/photoTask/{id}/destroy', [PhotoTaskController::class, 'destroy'])->name('photoTask.destroy');




    Route::get('/userfavorite', [FavoriteController::class, 'index'])->name('userfavorite.index');




    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
