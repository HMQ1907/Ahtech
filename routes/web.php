<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/{id}', [UserController::class, 'getUserById'])->name('user.detail');
            Route::post('/create', [UserController::class, 'create'])->name('user.create');
            Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/{id}', [UserController::class, 'delete'])->name('user.delete');
            Route::patch('/{id}', [UserController::class, 'block'])->name('user.block');
        });

        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
            Route::post('/create', [CustomerController::class, 'create'])->name('customer.create');
            Route::put('/{id}', [CustomerController::class, 'update'])->name('customer.update');
            Route::delete('/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
            Route::get('/export-customers', [CustomerController::class, 'export'])->name('customer.export');
            Route::post('/import-customers', [CustomerController::class, 'import'])->name('customer.import');
        });

        Route::group(['prefix' => 'blog'], function () {
            Route::get('/', [BlogController::class, 'index'])->name('blog.index');
            Route::get('add', [BlogController::class, 'create'])->name('blog.add');
            Route::post('create', [BlogController::class, 'create'])->name('blog.store');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
            Route::post('update/{id}', [BlogController::class, 'update'])->name('blog.update');
            Route::delete('/{id}', [BlogController::class, 'delete'])->name('blog.delete');
        });

        Route::group(['prefix' => 'partner'], function () {
            Route::get('/', [PartnerController::class, 'index'])->name('partner.index');
            Route::get('add', [PartnerController::class, 'create'])->name('partner.create');
            Route::post('create', [PartnerController::class, 'store'])->name('partner.store');
            Route::get('/edit/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
            Route::post('update/{id}', [PartnerController::class, 'update'])->name('partner.update');
            Route::delete('/{id}', [PartnerController::class, 'delete'])->name('partner.delete');
        });
    });
});


Route::get('/', [HomeController::class, 'index'])->name('fe.home');
Route::get('/about', [AboutController::class, 'index'])->name('fe.about');
Route::get('/contact', [ContactController::class, 'index'])->name('fe.contact');
Route::get('/service', [ServiceController::class, 'index'])->name('fe.service');
Route::get('/sdsi', function () {
    return view('frontend.sdsi');
})->name('fe.sdsi');

Route::get('/edi', function () {
    return view('frontend.edi');
})->name('fe.edi');


Route::get('/cis', function () {
    return view('frontend.cis');
})->name('fe.cis');


Route::get('/cs', function () {
    return view('frontend.cs');
})->name('fe.cs');


Route::get('/ism', function () {
    return view('frontend.ism');
})->name('fe.ism');