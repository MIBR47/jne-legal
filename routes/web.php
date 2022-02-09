<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Drafting\CustomerController;
use App\Http\Controllers\Drafting\DraftingController;
use App\Http\Controllers\Drafting\LeaseController;
use App\Http\Controllers\Drafting\VendorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Litigation\CustomerDisputeController;
use App\Http\Controllers\Litigation\FraudController;
use App\Http\Controllers\Litigation\LitigationController;
use App\Http\Controllers\Litigation\OtherController;
use App\Http\Controllers\Litigation\OutstandingController;
use App\Http\Controllers\Permit\LegalPermitController;
use App\Http\Controllers\Permit\PerizinanBaruController;
use App\Http\Controllers\Permit\PermitController;
use Illuminate\Support\Carbon;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login-attempt');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/database', function () { return view('pages.database.index'); });

Route::prefix('/drafting')->group(function () {
    Route::get('/', [DraftingController::class, 'index'])->name('drafting-index');

    Route::get('/customer', [CustomerController::class, 'index'])->name('customer-index');
    Route::get('/customer/check', [CustomerController::class, 'check'])->name('customer-check');

    Route::get('/vendor-supplier', [VendorController::class, 'index'])->name('vendor-index');
    Route::get('/vendor-supplier/check', [VendorController::class, 'check'])->name('vendor-check');

    Route::get('/lease', [LeaseController::class, 'index'])->name('lease-index');
    Route::get('/lease/check', [LeaseController::class, 'check'])->name('lease-check');
});

Route::prefix('/litigation')->group(function () {
    Route::get('/', [LitigationController::class, 'index'])->name('litigation-index');

    Route::get('/customer-dispute', [CustomerDisputeController::class, 'index'])->name('customer-dispute-index');
    Route::get('/customer-dispute/check', [CustomerDisputeController::class, 'check'])->name('customer-dispute-check');
    Route::get('/customer-dispute/report', [CustomerDisputeController::class, 'report'])->name('customer-dispute-report');

    Route::get('/fraud', [FraudController::class, 'index'])->name('fraud-index');
    Route::post('/fraud/post', [FraudController::class, 'store'])->name('fraud-post');
    Route::get('/fraud/check', [FraudController::class, 'check'])->name('fraud-check');
    Route::get('/fraud/report', [FraudController::class, 'report'])->name('fraud-report');

    Route::get('/outstanding', [OutstandingController::class, 'index'])->name('outstanding-index');
    Route::get('/outstanding/check', [OutstandingController::class, 'check'])->name('outstanding-check');
    Route::get('/outstanding/report', [OutstandingController::class, 'report'])->name('outstanding-report');

    Route::get('/other', [OtherController::class, 'index'])->name('other-index');
    Route::get('/other/check', [OtherController::class, 'check'])->name('other-check');
    Route::get('/other/report', [OtherController::class, 'report'])->name('other-report');
    Route::post('/other/post', [OtherController::class, 'store'])->name('other-post');
});

Route::prefix('/permit')->group(function () {
    Route::get('/', [PermitController::class, 'index'])->name('permit-index');

    Route::get('/perizinan-baru', [PerizinanBaruController::class, 'index'])->name('perizinan-baru-index');
    Route::post('/perizinan-baru/post', [PerizinanBaruController::class, 'store'])->name('perizinan-baru-post');

    Route::get('/perizinan-baru/approval', [PerizinanBaruController::class, 'approval'])->name('perizinan-baru-approval');
    Route::get('/perizinan-baru/check', [PerizinanBaruController::class, 'check'])->name('perizinan-baru-check');
});

Route::prefix('/legal-permit')->group(function () {
    Route::get('/', [LegalPermitController::class, 'index'])->name('legal-permit-dashboard');
});

Route::prefix('/admin-legal')->middleware('IsAdmin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
});

Route::prefix('/legal-litigation-1')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-litigation-1.index'); });
});

Route::prefix('/legal-litigation-2')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-litigation-2.index'); });
});

Route::prefix('/legal-manager')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-manager.index'); });
});

Route::prefix('/team-cs')->group(function () {
    Route::get('/', function () { return view('pages.litigation.team-cs.index'); });
});
