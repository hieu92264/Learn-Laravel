<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;

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

Route::prefix('infor')->group(function () {
    Route::get('/', [InforController::class, 'index']);
    Route::get('/add', function () {
        return view('add');
    });
    Route::post('/store', [InforController::class, 'store'])->name('store');
    Route::get('/edit/{id}', function ($id) {
        return view('edit', [
            'id' => $id
        ]);
    });
    Route::post('/edit', [InforController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [InforController::class, 'destroy'])->name('delete');  // Định tuyến phương thức DELETE nếu cần xóa
});

