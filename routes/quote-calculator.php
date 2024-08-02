<?php

use App\Http\Controllers\AigInsuranceController;
use App\Http\Controllers\AmamRateInsuranceController;
use App\Http\Controllers\CompanyPolicyController;
use App\Http\Controllers\CountryDropDownController;
use App\Http\Controllers\DigitalAgentController;
use App\Http\Controllers\GoldenAgentController;
use App\Http\Controllers\GreatWesternInsuranceController;
use App\Http\Controllers\HeritagePlanController;
use App\Http\Controllers\HeightWeightTestController;
use App\Http\Controllers\InsuranceCompanyController;
use App\Http\Controllers\LBLInsuranceController;
use App\Http\Controllers\NewVistaInsuranceController;
use App\Http\Controllers\SeniorHardCodeController;
use App\Http\Controllers\SIWLController;
use App\Http\Controllers\SeniorLifeInuranceController;
use App\Http\Controllers\TrinityInsuranceController;
use Illuminate\Support\Facades\Route;


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


// Drop down routes start here

Route::get('get-states', [CountryDropDownController::class, 'getStates'])->name('guest.get-states');
Route::get('get-states2', [CountryDropDownController::class, 'getStates2'])->name('guest.get-states2');
Route::get('get-cities', [CountryDropDownController::class, 'getCities'])->name('guest.get-cities');
Route::get('get-cities2', [CountryDropDownController::class, 'getCities2'])->name('guest.get-cities2');
Route::get('get-zip', [CountryDropDownController::class, 'getZip'])->name('guest.get-zip');
Route::get('get-zip2', [CountryDropDownController::class, 'getZip2'])->name('guest.get-zip2');


// test routes
Route::group([
    'middleware' => ['auth', 'permission:super_admin_view|admin_view'],
    'as' => 'dashboard.test.',
    'prefix' => 'dashboard/test/'
], function () {
    Route::resource('aig-insurance', AigInsuranceController::class);
    Route::resource('amam-insurance', AmamRateInsuranceController::class);
    Route::resource('new-vista-insurance', NewVistaInsuranceController::class);
    Route::resource('lbl-insurance', LBLInsuranceController::class);
    Route::resource('siwl-insurance', SIWLController::class);
    Route::resource('senior-life', SeniorLifeInuranceController::class);
    Route::resource('heritage-insurance', HeritagePlanController::class);
    Route::resource('golden-agent-insurance', GoldenAgentController::class);
    Route::resource('great-western-insurance', GreatWesternInsuranceController::class);
    Route::resource('trinity-insurance', TrinityInsuranceController::class);
    Route::resource('digital-agent-insurance', DigitalAgentController::class);
});

//  test weight charts
Route::group([
    'middleware' => ['auth', 'permission:super_admin_view|admin_view'],
    'as' => 'dashboard.test.hieght-weights.',
    'prefix' => 'dashboard/test-weight-charts/'
], function () {
    Route::get('senior-life-old', [HeightWeightTestController::class, 'senior_life_index'])->name('seniorlife.index');
    Route::get('senior-life-ultimate-super-preferred', [HeightWeightTestController::class, 'seniorUltimatePreferred'])->name('seniorlife.ultimate-preferred');
    Route::post('store-senior-life-weights', [HeightWeightTestController::class, 'store_senior_life'])->name('seniorlife.store');
    Route::post('ultimate-preferred/store-senior-life-weights', [HeightWeightTestController::class, 'storeSeniorUltimate'])->name('seniorlife.ultimate-preferred.store');
    Route::get('senior-life-standard-joint', [HeightWeightTestController::class, 'seniorStandardJoint'])->name('seniorlife.standard-joint');
    Route::post('standard-joint/store-senior-life-weights', [HeightWeightTestController::class, 'storeStandardJoint'])->name('seniorlife.standard-joint.store');
    
});


Route::group([
    'middleware' =>  ['auth', 'permission:super_admin_view|admin_view'],
    'as' => 'dashboard.',
    'prefix' => 'dashboard/'
], function () {

    Route::resource('insurance-company', InsuranceCompanyController::class);
    Route::post('update_company/{insuranceCompany}', [InsuranceCompanyController::class, 'update_company'])->name('insurance-company');
    
    Route::resource('company-policies', CompanyPolicyController::class);
    Route::view('UpdateCompanyDetails', 'front.companies.edit')->name('UpdateCompanyDetails');
    Route::post('Ajax_View', [CompanyPolicyController::class, 'Ajax_View_For_Update_View'])->name('Ajax_View_For_Update_View');
    Route::post('FormulaUpdate', [InsuranceCompanyController::class, 'FormulaUpdate'])->name('FormulaUpdate');
    Route::post('FactorsUpdate', [InsuranceCompanyController::class, 'FactorsUpdate'])->name('FactorsUpdate');
    Route::post('RidersUpdate', [InsuranceCompanyController::class, 'RidersUpdate'])->name('RidersUpdate');
});


Route::group([
    'middleware' =>  ['auth', 'permission:super_admin_view|admin_view'],
    'as' => 'dashboard.',
    'prefix' => 'dashboard/'
], function () {
    Route::get('policy_formula', [InsuranceCompanyController::class, 'policy_formula'])->name('policy.policy_formula');
    Route::post('submit_formula', [InsuranceCompanyController::class, 'submit_formula'])->name('policy.submit_formula');
});



Route::group([
    'middleware' =>  ['auth'],
    'as' => 'seniorhard.',
    'prefix' => 'seniorhard/'
], function () {
    Route::post('get_sub_policy_types', [SeniorHardCodeController::class, 'get_sub_policy_types'])->name('get_sub_policy_types');
    
});
