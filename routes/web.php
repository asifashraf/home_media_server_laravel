<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use all controllers at once 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirBulkController;
use App\Http\Controllers\DirController;
use App\Http\Controllers\FileBulkController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FilePDFController;
use App\Http\Controllers\FileTypeController;
use App\Http\Controllers\FileVideoController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\MediaServerController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPermissionsController;
use App\Http\Controllers\UserRolesController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// make Route::resource for all the imported api controllers

Route::resource('auth', AuthController::class);
Route::resource('dirbulk', DirBulkController::class);
Route::resource('dir', DirController::class);
Route::resource('filebulk', FileBulkController::class);
Route::resource('file', FileController::class);
Route::resource('filepdf', FilePDFController::class);
Route::resource('filetype', FileTypeController::class);
Route::resource('filevideo', FileVideoController::class);
Route::resource('folder', FolderController::class);
Route::resource('mediaserver', MediaServerController::class);
Route::resource('permission', PermissionsController::class);
Route::resource('rolepermission', RolePermissionsController::class);
Route::resource('role', RolesController::class);
Route::resource('user', UserController::class);
Route::resource('userpermission', UserPermissionsController::class);
Route::resource('userrole', UserRolesController::class);


require __DIR__.'/auth.php';
