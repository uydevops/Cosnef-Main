<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('login');
});
// Session Olmadığı halde Giriş Yapmaya Çalışırsa Login Sayfasına Yönlendir
Route::get('/login', function () {
    return redirect('/');
})->name('login');

Route::post('/auth', [AuthController::class, 'auth'])->name('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/dashboard/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('users');

    /**JSON ve Analitik değerler */
    Route::post('/dashboard/add-task', [DashboardController::class, 'addTask'])->name('dashboard.add-task');
    Route::post('/dashboard/delete-task', [DashboardController::class, 'deleteTask'])->name('dashboard.delete-task');
    Route::post('/dashboard/check-task', [DashboardController::class, 'checkTask'])->name('dashboard.check-task');
    Route::get('/dashboard/approved-companies/{id}', [DashboardController::class, 'approvedCompanies'])->name('dashboard.approved-companies');
    Route::get('/dashboard/rejected-companies/{id}', [DashboardController::class, 'rejectedCompany'])->name('dashboard.rejected-companies');

    /*******************Kullanici Ayarlari******************* */

    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('users');
    Route::post('/dashboard/users/update', [UserController::class, 'updateUser'])->name('users.update');
    Route::get('/dashboard/users/delete/{id}', [UserController::class, 'deleteUser'])->name('users.delete');
    Route::post('/dashboard/users/add', [UserController::class, 'addUser'])->name('users.add');

    /******************(Companies)******************** */

    Route::get('/dashboard/companies', [DashboardController::class, 'companies'])->name('companies');
    Route::post('/dashboard/companies/update', [CompaniesController::class, 'updateCompany'])->name('companies.update');
    Route::get('/dashboard/companies/delete/{id}', [CompaniesController::class, 'deleteCompany'])->name('companies.delete');
    Route::post('/dashboard/companies/add', [CompaniesController::class, 'addCompany'])->name('companies.add');




    /*******************Products******************* */

    Route::get('/dashboard/products', [DashboardController::class, 'products'])->name('products');
    Route::post('/dashboard/products/update', [ProductsController::class, 'updateProduct'])->name('products.update');
    Route::get('/dashboard/products/delete/{id}', [ProductsController::class, 'deleteProduct'])->name('products.delete');
    Route::post('/dashboard/products/add', [ProductsController::class, 'addProduct'])->name('products.add');
    Route::get('/dashboard/products/show/{id}', [ProductsController::class, 'showProduct'])->name('products.show');
    

});
