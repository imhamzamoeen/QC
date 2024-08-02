<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Role  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Roles routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "role" middleware group. Enjoy managing your roles and permission!
|
*/

    Route::get('Role', [RoleController::class, 'role_index'])->name('Role');
    Route::get('Permission', [RoleController::class, 'permission_index'])->name('Permission');
    Route::post('RolePerAdd', [RoleController::class, 'RolePerAdd'])->name('RolePerAdd');
    Route::post('DeleteRole', [RoleController::class, 'delete_role'])->name('DeleteRol');
    Route::post('Get_Permission_Of_Role', [RoleController::class, 'Get_Permission_Of_Role'])->name('Get_Permission_Of_Role');
    Route::post('EditRolePer', [RoleController::class, 'EditRolePer'])->name('EditRolePer');
    Route::POST('Role-User-Del', [RoleController::class, 'delete_role_to_user'])->name('DelUserPer');
    Route::post('Create-User_Role', [RoleController::class, 'store_role_to_user'])->name('create.role_to_user');
    Route::post('Get-User_Role', [RoleController::class, 'get_user_role'])->name('get_user_role');
    Route::post('DeletePermission', [RoleController::class, 'delete_permission'])->name('DeletePermission');
    Route::post('PermissionAdd', [RoleController::class, 'store_permission'])->name('PermissionAdd');
    Route::POST('permission_to_user/create', [RoleController::class, 'store_permission_to_user'])->name('create.permission_to_user');
    Route::POST('EditPerUser', [RoleController::class, 'EditPerUser'])->name('EditPerUser');
    Route::post('GetPerUser', [RoleController::class, 'get_user_permission'])->name('UserPer');
    Route::post('GetPermission', [RoleController::class, 'get_permission'])->name('GetPermission');
    Route::post('GetPermissionData', [RoleController::class, 'GetPermissionData'])->name('GetPermissionData');
    Route::post('GetRoleData', [RoleController::class, 'GetRoleData'])->name('GetRoleData');
    Route::post('store_role_to_permission', [RoleController::class, 'store_role_to_permission'])->name('store_role_to_permission');
    Route::post('delete_role_to_permission', [RoleController::class, 'delete_role_to_permission'])->name('delete_role_to_permission');