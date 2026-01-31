<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TelegramTestController;
use App\Jobs\SendTelegramMessageJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/telegram-test', [TelegramTestController::class, 'send']);
Route::get('/telegram-test-queue', function () {
    SendTelegramMessageJob::dispatch("✅ Очередь работает! Laravel отправил сообщение через JOB");

    return "OK. Job отправлен в очередь";
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
