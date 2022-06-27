<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinancialServicesController;
use App\Http\Controllers\ManageUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\ManageBankController;
use App\Http\Controllers\ManageBankLoanController;
use App\Http\Controllers\ManageBankRegisterController;
use App\Http\Controllers\ManageBusinessCategoryController;
use App\Http\Controllers\ManageBusinessController;
use App\Http\Controllers\ManageCommunityCategoryController;
use App\Http\Controllers\ManageCommunityController;
use App\Http\Controllers\ManageCommunityRegisterController;
use App\Http\Controllers\ManageGalerryController;
use App\Http\Controllers\ManageNewsController;
use App\Http\Controllers\ManageReviewController;
use App\Http\Controllers\ManageSlideController;
use App\Http\Controllers\ManageYoutubeController;
use App\Http\Controllers\ManageTourController;
use App\Http\Controllers\ManageAdminBankController;


Route::get('/i-am-forgot-login-admin', [AuthAdminController::class, 'forgot']);
Route::get('reset/{uuid}', [AuthAdminController::class, 'reset']);
Route::get('/login-admin', [AuthAdminController::class, 'index'])->name('login');
Route::post('/forgot', [AuthAdminController::class, 'forgot_proses']);
Route::post('/login-admin', [AuthAdminController::class, 'store']);
Route::post('/new-password', [AuthAdminController::class, 'new_pass']);

Route::get('com', [ManageCommunityController::class, 'listCommunities']);


Route::middleware(['islogin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('bank', [ManageBankController::class, 'index']);
    Route::get('bank/create', [ManageBankController::class, 'create']);
    Route::get('/bank-data', [ManageBankController::class, 'anyData'])->name('bank-data');
    Route::delete('bank/{financialService}', [ManageBankController::class, 'destroy']);
    Route::post('bank/', [ManageBankController::class, 'store']);
    Route::put('bank/{financialService}', [ManageBankController::class, 'update']);
    Route::get('bank/edit/{financialService}', [ManageBankController::class, 'edit']);
    Route::get('/logout', [AuthAdminController::class, 'logout']);



    Route::resource('/users', ManageUserController::class);
    Route::get('/-data', [ManageUserController::class, 'anyData'])->name('data');

    Route::resource('/admin-bank', ManageAdminBankController::class);
    Route::get('/admin-bank-data', [ManageAdminBankController::class, 'anyData'])->name('admin-bank-data');

    Route::resource('/galleries', ManageGalerryController::class);
    Route::get('/galleries-data', [ManageGalerryController::class, 'anyData'])->name('galleries_data');

    Route::resource('/admin', ManageAdminController::class);
    Route::get('/admin-data', [ManageAdminController::class, 'anyData'])->name('admin-data');


    Route::resource('/slides', ManageSlideController::class);
    Route::get('/slide-data', [ManageSlideController::class, 'anyData'])->name('slide-data');

    Route::resource('/youtube', ManageYoutubeController::class);
    Route::get('/youtube-data', [ManageYoutubeController::class, 'anyData'])->name('youtube-data');

    Route::resource('/news', ManageNewsController::class);
    Route::get('/news-data', [ManageNewsController::class, 'anyData'])->name('news-data');

    Route::resource('/business-category', ManageBusinessCategoryController::class);
    Route::get('/business-category-data', [ManageBusinessCategoryController::class, 'anyData'])->name('business-category-data');

    Route::resource('/business', ManageBusinessController::class);
    Route::get('/business-data', [ManageBusinessController::class, 'anyData'])->name('business-data');

    Route::resource('/tour', ManageTourController::class);
    Route::get('/tour-data', [ManageTourController::class, 'anyData'])->name('tour-data');
    Route::get('/api-data', [ManageTourController::class, 'listTourUser']);

    Route::resource('/community-category', ManageCommunityCategoryController::class);
    Route::get('/community-category-data', [ManageCommunityCategoryController::class, 'anyData'])->name('community-category-data');

    Route::resource('/community', ManageCommunityController::class);
    Route::get('/community-data', [ManageCommunityController::class, 'anyData'])->name('community-data');

    Route::resource('/community-registers', ManageCommunityRegisterController::class);
    Route::get('/community-registers-data', [ManageCommunityRegisterController::class, 'anyData'])->name('community-registers-data');

    Route::resource('/review', ManageReviewController::class);
    Route::get('/review-data', [ManageReviewController::class, 'anyData'])->name('review-data');

    Route::delete('bank-register/{financialServiceRegister}', [ManageBankRegisterController::class, 'destroy']);
    Route::resource('/bank-register', ManageBankRegisterController::class);
    Route::get('/bank-register-data', [ManageBankRegisterController::class, 'anyData'])->name('bank-register-data');
    Route::post('/bank-send', [ManageBankRegisterController::class, 'sendData']);


    Route::delete('bank-loan/{financialServiceRegister}', [ManageBankLoanController::class, 'destroy']);
    Route::resource('/bank-loan', ManageBankLoanController::class);
    Route::get('/bank-loan-data', [ManageBankLoanController::class, 'anyData'])->name('bank-loan-data');

});
Route::get('/report', [ManageBankLoanController::class, 'report']);







