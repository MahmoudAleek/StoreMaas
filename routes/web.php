<?php

use Illuminate\Support\Facades\Route;

// ############# ALL ADMIN CONTROLLERS ############# //
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AdminControllers\AdminManagementController;
use App\Http\Controllers\AdminControllers\AdminProfileController;
use App\Http\Controllers\AdminControllers\AdminBrandController;
use App\Http\Controllers\AdminControllers\AdminCategoryController;
use App\Http\Controllers\AdminControllers\AdminSubCategoryController;
use App\Http\Controllers\AdminControllers\AdminProductController;

// ############# ALL CUSTOMERS CONTROLLERS ############# //
use App\Http\Controllers\CustomersControllers\CustomerController;


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

Route::get('/', function () {
    return view('customer.index');
});



Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard',[AdminManagementController::class,'home'])->name('admin.dashboard');
});


Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[CustomerController::class,'home'])->name('dashboard');
});



// ############################ Admin All Routes ############################ //

Route::group(['prefix'=> '/admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');


});



Route::get('/admin/logout',[AdminController::class,  'destroy'])->name('admin.logout');

Route::get('/admin/profile',[AdminProfileController::class ,'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit',[AdminProfileController::class , 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store',[AdminProfileController::class , 'AdminProfileStore'])->name('admin.profile.update');

Route::get('/admin/profile/change-password' , [AdminProfileController::class , 'AdminChangePassword'])->name('admin.profile.changepassword');
Route::post('/admin/profile/update-password' , [AdminProfileController::class , 'AdminUpdatePassword'])->name('admin.profile.updatepassword');


// ------------ All Admin Brand Routes ------------ //
Route::prefix('/admin/brand')->middleware(['auth:sanctum,admin'])->group(function () {
    Route::get('/view',[AdminBrandController::class,'brandsView'])->name('all.brands');
    Route::post('/store',[AdminBrandController::class,'store'])->name('brand.store');


    Route::get('/edit/{id}',[AdminBrandController::class,'brandEditPage'])->name('brand.editpage');
    Route::post('/update',[AdminBrandController::class,'Update'])->name('brand.update');

    Route::get('/delete/{id}',[AdminBrandController::class,'Delete'])->name('brand.delete');

});


// ------------ All Admin Categories Routes ------------ //
Route::prefix('/admin/category')->middleware(['auth:sanctum,admin'])->group(function () {
    Route::get('/view',[AdminCategoryController::class,'ViewCategories'])->name('all.categories');
    Route::post('/store',[AdminCategoryController::class,'store'])->name('category.store');


    Route::get('/edit/{id}',[AdminCategoryController::class,'categoryEditPage'])->name('category.editpage');
    Route::post('/update',[AdminCategoryController::class,'Update'])->name('category.update');

    Route::get('/delete/{id}',[AdminCategoryController::class,'Delete'])->name('category.delete');

});


// ------------ All Admin Sub Categories Routes ------------ //
Route::prefix('/admin/sub-category')->middleware(['auth:sanctum,admin'])->group(function () {
    Route::get('/view',[AdminSubCategoryController::class,'ViewCategories'])->name('all.sub-categories');
    Route::post('/store',[AdminSubCategoryController::class,'store'])->name('sub-category.store');


    Route::get('/edit/{id}',[AdminSubCategoryController::class,'categoryEditPage'])->name('sub-category.editpage');
    Route::post('/update',[AdminSubCategoryController::class,'Update'])->name('sub-category.update');

    Route::get('/delete/{id}',[AdminSubCategoryController::class,'Delete'])->name('sub-category.delete');

});

Route::get('/category/subcategory/ajax/{id}',[AdminSubCategoryController::class,'getSubCategories'])->name('getsubcategories-json');





// ------------ All Admin Products Routes ------------ //
Route::prefix('/admin/product')->group(function () {
    Route::get('/view',[AdminProductController::class,'ViewProducts'])->name('all.products');
    Route::get('/add',[AdminProductController::class,'AddProduct'])->name('add.product');
    Route::post('/store',[AdminProductController::class,'StoreProducts'])->name('store.product');

    Route::get('/properties',[AdminProductController::class,'propertyPage'])->name('product.property');
    Route::post('/properties',[AdminProductController::class,'StoreProperty'])->name('product.store-property');

    Route::post('/product-details',[AdminProductController::class,'StoreProductDetails'])->name('product.details');


    Route::get('/edit/{id}',[AdminProductController::class,'ProductEditPage'])->name('product.editpage');
    Route::post('/update',[AdminProductController::class,'Update'])->name('product.update');

    Route::get('/delete/{id}',[AdminProductController::class,'Delete'])->name('product.delete');

});











// Customer All Routes // 

Route::get('/user/logout',[CustomerController::class ,'UserLogout'])->name('user.logout');


Route::get('/user/profile',[CustomerController::class , 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store',[CustomerController::class , 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/change/password',[CustomerController::class,'UserChangePassword'])->name('user.change.password');
Route::post('/user/update/password',[CustomerController::class,'UserUpdatePassword'])->name('user.update.password');