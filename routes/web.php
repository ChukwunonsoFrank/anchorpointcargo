<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PdfController;

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
Route::get('/optimize', function() {
    Artisan::call('optimize');
    dd('Optimization complete...');
});

Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    dd('Clear cache complete...');
});

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services.index');
})->name('services.index');

Route::get('/services/air-freight', function () {
    return view('frontend.services.air-freight');
})->name('services.air-freight');

Route::get('/services/ocean-freight', function () {
    return view('frontend.services.ocean-freight');
})->name('services.ocean-freight');

Route::get('/services/packaging', function () {
    return view('frontend.services.packaging');
})->name('services.packaging');

Route::get('/services/road-freight', function () {
    return view('frontend.services.road-freight');
})->name('services.road-freight');

Route::get('/services/supply-chain', function () {
    return view('frontend.services.supply-chain');
})->name('services.supply-chain');

Route::get('/services/warehousing', function () {
    return view('frontend.services.warehousing');
})->name('services.warehousing');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/track', function () {
    return view('frontend.track');
})->name('track');

Route::get('/track/package', function () {
    return view('frontend.details');
})->name('details');

Route::post('/tracking', [OrderController::class, 'track'])->name('tracking');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('/orders/new', [OrderController::class, 'create'])->name('order.create');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('order.store');
    Route::post('/orders/image/upload', [OrderController::class, 'uploadImage'])->name('order.image.upload');
    Route::get('/orders/edit/{order_id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::post('/orders/update', [OrderController::class, 'update'])->name('order.update');
    Route::get('/orders/delete/{order_id}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::get('/generate-pdf', [OrderController::class, 'generate'])->name('generate-pdf');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/admin/users', [UserController::class, 'index']);
//     Route::get('/admin/users/debit-or-credit', [UserController::class, 'create_debit_or_credit']);
//     Route::get('/admin/users/details', [UserController::class, 'edit']);
//     Route::post('/admin/users/details', [UserController::class, 'store']);

//     Route::get('/admin/deposits/pending', [PendingDepositsController::class, 'index']);
//     Route::get('/admin/deposits/approve', [PendingDepositsController::class, 'approve']);
//     Route::get('/admin/deposits/details', [PendingDepositsController::class, 'edit']);
//     Route::post('/admin/deposits/details', [PendingDepositsController::class, 'store']);

//     Route::get('/admin/transfers/pending', [PendingTransfersController::class, 'index']);
//     Route::get('/admin/transfers/approve', [PendingTransfersController::class, 'approve']);
//     Route::get('/admin/transfers/details', [PendingTransfersController::class, 'edit']);
//     Route::post('/admin/transfers/details', [PendingTransfersController::class, 'store']);

//     Route::get('/admin/transactions', [AdminTransactionsController::class, 'index']);

//     Route::get('/admin/investments/pending', [PendingInvestmentsController::class, 'index']);
//     Route::get('/admin/investments/approve', [PendingInvestmentsController::class, 'approve']);
//     Route::get('/admin/investments/details', [PendingInvestmentsController::class, 'edit']);

//     Route::get('/admin/investments/matured', [MaturedInvestmentsController::class, 'index']);
//     Route::get('/admin/investments/matured/details', [MaturedInvestmentsController::class, 'edit']);

//     Route::get('/admin/withdrawals/pending', [PendingWithdrawalsController::class, 'index']);
//     Route::get('/admin/withdrawals/approve', [PendingWithdrawalsController::class, 'approve']);
//     Route::get('/admin/withdrawals/details', [PendingWithdrawalsController::class, 'edit']);

//     Route::get('/admin/withdrawals/confirmed', [ConfirmedWithdrawalsController::class, 'index']);
//     Route::get('/admin/withdrawals/confirmed/details', [ConfirmedWithdrawalsController::class, 'edit']);
// });

require __DIR__ . '/auth.php';
