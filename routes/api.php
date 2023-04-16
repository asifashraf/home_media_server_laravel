<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use api/auth controller
use App\Http\Controllers\Api\AuthController;
// use api/ dirbulk controller
use App\Http\Controllers\Api\DirBulkController;
// use api/ dir controller
use App\Http\Controllers\Api\DirController;
// use api/ filebulk controller
use App\Http\Controllers\Api\FileBulkController;
// use api/ file controller
use App\Http\Controllers\Api\FileController;
// use api/ filepdf controller
use App\Http\Controllers\Api\FilePDFController;
// use api/ filetype controller
use App\Http\Controllers\Api\FileTypeController;
// use api/FileVideoController
use App\Http\Controllers\Api\FileVideoController;
// use api/FoldersController
use App\Http\Controllers\Api\FoldersController;

//use api/MediaServerController
use App\Http\Controllers\Api\MediaServerController;

//use PermissionsController 
use App\Http\Controllers\Api\PermissionsController;
// use api/RolePermissionsController
use App\Http\Controllers\Api\RolePermissionsController;

// use api/RolesController
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\UserController;

//use api/UserPermissionsController
use App\Http\Controllers\Api\UserPermissionsController;
//use api/UserRolesController   
use App\Http\Controllers\Api\UserRolesController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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
Route::resource('folders', FoldersController::class);
Route::resource('mediaserver', MediaServerController::class);
Route::resource('permissions', PermissionsController::class);
Route::resource('rolepermissions', RolePermissionsController::class);
Route::resource('roles', RolesController::class);
Route::resource('users', UserController::class);
Route::resource('userpermissions', UserPermissionsController::class);
Route::resource('userroles', UserRolesController::class);
