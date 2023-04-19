<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\do_upload;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MailController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::group(['middleware'=>['auth']],function(){
        // Banner controllers
        Route::get('/', [BannerController::class, 'dashboard'])->name('dashboard');
        Route::get('banner/view', [BannerController::class, 'viewBanner'])->name('view.banner');
        Route::get('new/banner', [BannerController::class, 'newBanner'])->name('add.banner');
        Route::post('store/banner', [BannerController::class, 'storeBanner'])->name('store.banner');
        Route::post('update/banner/{id}', [BannerController::class, 'UpdateBanner'])->name('update.banner');
        Route::get('delete/banner/{id}', [BannerController::class, 'DeleteBanner'])->name('delete.banner');
        // Treatment controllers
        Route::resource('treatments', TreatmentController::class);
        // Salon controllers
        Route::resource('salons', SalonController::class);
        Route::resource('notifications', NotificationController::class);
        Route::resource('reviews', ReviewController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('awards', AwardController::class);
        Route::resource('careers',CareerController::class);
        Route::post('store/offer', [OfferController::class, 'storeOffer'])->name('store.offer');
        Route::get('offer/view', [OfferController::class, 'viewOffer'])->name('view.offer');
        Route::post('update/offer', [OfferController::class, 'UpdateOffer'])->name('update.offer');
        Route::get('delete/offer/{id}', [OfferController::class, 'DeleteOffer'])->name('delete.offer');
    });
});

