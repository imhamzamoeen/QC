<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CompanyExistsController;
use App\Http\Controllers\HeightWeightTestController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NormalInfoControler;
use App\Http\Controllers\PolicyCateogryController;
use App\Http\Controllers\PolicyDataUpdateController;
use App\Http\Controllers\QuoteTestController;
use App\Http\Controllers\RegisterationController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Hamza's  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'middleware' => ['auth'],
        'prefix' => 'Information/',
        'as' => 'Information.'


    ],
    function () {

        Route::post('get_company_from_state', [NormalInfoControler::class, 'get_company_from_state'])->name('get_company_from_state');
        Route::post('get_policy_type_from_company', [NormalInfoControler::class, 'get_policy_type_from_company'])->name('get_policy_type_from_company');
        Route::get('get_all_companies', [NormalInfoControler::class, 'get_all_companies'])->name('get_all_companies');
        Route::get('GetLeads', [NormalInfoControler::class, 'GetLeads'])->name('GetLeads');
    }
);


Route::group(
    [
        'middleware' => ['auth', 'role:super_admin|admin'],
        'prefix' => 'CompanyManagment/',
        'as' => 'CompanyManagment.'


    ],
    function () {

        Route::resource('Company-State', CompanyExistsController::class);
        Route::view('Companies_With_State', 'front.company-exists.View_Companies')->name('view');
        Route::post('add_company_state',[CompanyExistsController::class, 'AddCompany'])->name('add_company_state');
    }
);





Route::group(
    [
        'middleware' => ['auth', 'role:super_admin|admin'],
        'prefix' => 'PolicyManagement/',
        'as' => 'PolicyManagement.'


    ],
    function () {

        Route::resource('PolicyManagement', PolicyDataUpdateController::class);
        Route::view('ManagePolicy', 'front.policymanagment.manage')->name('manage');
        Route::view('UpdatePolicyRate', 'front.company-policies.update_policy_rate')->name('update_rate');
        Route::post('policy_file_update',[PolicyDataUpdateController::class, 'policy_file_update'])->name('policy_file_update');
        Route::view('CheckRates/{name}', 'front.policymanagment.checkrate')->name('checkrate');
      
    }
);
