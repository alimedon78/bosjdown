<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('authregister', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('authregister', ['https' => true, RegisteredUserController::class, 'store']);

    Route::get('authlogin', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('authlogin', ['https' => true, AuthenticatedSessionController::class, 'store']);

    Route::get('authforgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('authforgot-password', ['https' => true, PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', ['https' => true, NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', ['https' => true, EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', ['https' => true, ConfirmablePasswordController::class, 'store']);

    Route::post('logout', ['https' => true, AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
