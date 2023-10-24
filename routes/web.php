<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CoupenController;
use App\Http\Controllers\AssignCoupenController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\WishListController;

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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/product/{slug}', [FrontendController::class, 'details'])->name('product.details');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('/collection/{type}/{slug}',[FrontendController::class,'collection'])->name('collection.all');
Route::get('/collections',[FrontendController::class,'collectionview'])->name('collection.view');
Route::get('/all/Category',[FrontendController::class,'topCategory'])->name('category.all');


Auth::routes();
Route::prefix('/admin')->group(function (){
    Route::middleware(['checkadmin'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.home');
        Route::get('/customers', [App\Http\Controllers\UserController::class, 'index'])->name('admin.customers');
        Route::get('/site-setting', [App\Http\Controllers\HomeController::class, 'site_setting'])->name('site.setting');
        Route::post('store/site-setting', [App\Http\Controllers\HomeController::class, 'update_site_setting'])->name('store.site.setting');
        Route::resource('/category',CategoryController::class);
        Route::resource('/subcategory',SubCategoryController::class);
        // Route::resource('/brand',BrandController::class);
        Route::resource('/banner',BannerController::class);
        Route::resource('/product',ProductController::class);
        // Route::resource('/section',SectionController::class);
        // Route::resource('/coupen',CoupenController::class);
        Route::get('/coupen/delete/{id}',[CoupenController::class,'delete'])->name('coupen.delete');

        Route::get('/banner/delete/{id}',[BannerController::class,'delete'])->name('banner.delete');
        Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
        Route::get('/product/image/delete/{id}',[ProductController::class,'deleteImages'])->name('product.image.delete');
        Route::get('/section/delete/{id}',[SectionController::class,'delete'])->name('section.delete');

        Route::get('/assign/coupen/{id}',[AssignCoupenController::class,'edit'])->name('assign.coupen.edit');
        Route::post('/assign/coupen/store',[AssignCoupenController::class,'store'])->name('assign.coupen.store');
        Route::get('/subcategory/by/category',[ProductController::class,'subcat'])->name('subcat.by.cat');
    });
});
Route::middleware(['checkuser'])->group(function () {
    Route::get('/user/profile',[FrontendController::class,'profile'])->name('user.profile');
    Route::post('/user/profile/update',[FrontendController::class,'updatePassword'])->name('user.profile.update');
    Route::get('/add-to-like/{id}',[WishListController::class,'add'])->name('add.to.like');
    Route::get('/wishlist',[FrontendController::class,'wishlist'])->name('wishlist');
});

