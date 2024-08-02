<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MailController;

use App\Http\Controllers\PolicyCateogryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteTestController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\UserCompanyManagementController;
use App\Models\CompanyExists;
use App\Models\CompanyPolicy;
use App\Models\InsuranceCompany;
use App\Models\PasswordReset;
use App\Models\User;
use App\Models\UserCompanyManagement;
use App\Services\ExcelImportService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;

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

// Route::get('test-function/{function}', function ($function) {
//     return ExcelImportService::$function();
// });


route::get('testq', function () {

     
      
 
    return ;
});

Route::get('dashboard', function () {
    return redirect()->route('test_quote.index');
});
//test routes by hamza to test the quote calculator


Route::group(
    [
        'middleware' => ['auth', 'permission:super_admin_view'],

    ],
    function () {
        Route::post('/my-register', [RegisteredUserController::class, 'store']);
    }
);

Route::group(
    [
        'middleware' => ['auth'],
        'prefix' => 'quote/'
    ],
    function () {
        Route::get('calculate_quote', [QuoteTestController::class, 'calculate_quote'])->name('test_quote.calculate');
        Route::resource('test_quote', QuoteTestController::class);

        Route::post('data_fetch', [QuoteTestController::class, 'fetch_data'])->name('fetch_data');
        Route::post('filter_a_quote', [QuoteTestController::class, 'filter_a_quote'])->name('test_quote.filter');
        Route::post('get_result_data', [PolicyCateogryController::class, 'get_result_data'])->name('test_quote.get_result');
        Route::post('get_policies_types', [PolicyCateogryController::class, 'get_policies_types'])->name('test_quote.get_policies_types');
        Route::resource('policies', PolicyCateogryController::class);

        Route::post('Lead_submit', [PolicyCateogryController::class, 'Lead_submit'])->name('test_quote.lead_submit');
        // Route::get('display_policy/{img}/{rating}/{name}/{email}/{sub_policy_type}/{feature}/{annual}/{semi_annual}/{monthly}',[PolicyCateogryController::class,'display_policy'])->name('test_quote.display_policy');

        // Route::get('display_policy/{img}/{rating}/{name}/{email}/{sub_policy_type}/{feature}/{annual}/{semi_annual}/{monthly}',[PolicyCateogryController::class,'display_policy'])->name('test_quote.display_policy');
        Route::post('display_policy', [PolicyCateogryController::class, 'display_policy'])->name('test_quote.display_policy');
        Route::post('calculate_quote_riders', [PolicyCateogryController::class, 'calculate_quote_riders'])->name('test_quote.calculate_quote_riders');
    }
);

Route::group(
    [
        'middleware' => ['auth', 'role:super_admin|admin'],
        'prefix' => 'UserManagment'

    ],
    function () {

        Route::get('register', [RegisterationController::class, 'index'])->name('register.index');
        Route::post('register', [RegisterationController::class, 'Register'])->name('register.register');
        Route::post('DelUser', [RegisterationController::class, 'DelUser'])->name('register.DelUser');
        Route::post('EditUser', [RegisterationController::class, 'EditUser'])->name('register.EditUser');
        Route::get('getUsers', [RegisterationController::class, 'getUsers'])->name('register.getUsers');
        Route::resource('Company-User', UserCompanyManagementController::class);
        

    }
);

Route::group(
    [
        
        'prefix' => 'User/'

    ],
    function () {

        Route::view('Profile','profile.index')->name('profile');
        Route::post('Profile_Pic_Update', [ProfileController::class, 'pic_update'])->name('profile.pic_update');
        Route::post('profile_update', [ProfileController::class, 'profile_update'])->name('profile.updatedetails');

    }
);


Route::get('/', function () {

    if (auth()) {
        return redirect('quote/calculate_quote');
    } else {
        redirect('login');
    }
})->name('default');


Route::get('exception', function () {
    return view('errors.error');
})->name('exception');

Route::post('forget-password', [MailController::class, 'forget_passowrd'])->name('forget_password');
/* Routes By  Hamza Begin*/

require __DIR__ . '/auth.php';
require __DIR__ . '/quote-calculator.php';
