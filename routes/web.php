<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
   return redirect('/');
});

Route::get('/components/profile', function () {
   return view('components.profile');
});

// Route::get('/components/contant', function () {
//    return view('components.contant');
// });




Route::get('/', [UserController::class, 'loadlogin']);
Route::post('/login', [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/register', [UserController::class, 'loadRegister']);
Route::post('/register', [UserController::class, 'userRegister'])->name('userRegister');




Route::get('/home', [UserController::class, 'home']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/components/contant', [DashboardController::class, 'dashboard'])->name('components.contant');



Route::get('/forget',[UserController::class,'forgotPassword'])->name('forget');
Route::post('/forget_password',[UserController::class,'processForgetPassword'])->name('forget_password');
Route::get('/reset-password{token}',[UserController::class,'resetPassword'])->name('resetPassword');
Route::post('/process-reset-password',[UserController::class,'processResetPassword'])->name('processResetPassword');

Route::get('/components/contant', [DashboardController::class, 'dashboard'])->name('components.contant');
Route::get('/trytodelete/{id}',[DashboardController::class,'destroy']);
Route::put('/trytoupdate/{id}', [DashboardController::class, 'update']);
Route::get('/trytoupdate/{id}', [DashboardController::class, 'updates']);
Route::get('/view/{id}', [DashboardController::class, 'view'])->name('view');
Route::get('/components/add', [DashboardController::class, 'loadadd']);
Route::post('/components/add', [DashboardController::class, 'useradd'])->name('useradd');


Route::get('/Addional/addPermission', [PermissionController::class, 'addPermission'])->name('addPermission');
Route::post('Addional/addPermission', [PermissionController::class, 'storePermission'])->name('permissions.store');
Route::get('/Addional/listPermission', [PermissionController::class, 'listPermission'])->name('listPermission');
Route::get('/permissiondelete/{id}',[PermissionController::class,'destroy']);
Route::put('/permissionupdate/{id}', [PermissionController::class, 'update'])->name('update');
Route::get('/permissionupdate/{id}', [PermissionController::class, 'updates'])->name('update');
Route::get('/active-permission/{id}', [PermissionController::class, 'activePermission']);

Route::get('/Role/listRole', [RoleController::class, 'listRole'])->name('listRole');
Route::get('/Role/addRole', [RoleController::class, 'addRole'])->name('addRole');
Route::post('/Role/addRole', [RoleController::class, 'storeRole'])->name('role.store');
Route::get('/roledelete/{id}',[RoleController::class,'Delete']);
Route::put('/roleupdate/{id}', [RoleController::class, 'update']);
Route::get('/roleupdate/{id}', [RoleController::class, 'updates']);
Route::get('/active-role/{id}', [RoleController::class, 'activeRoles']);