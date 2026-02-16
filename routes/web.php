<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CohortController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventRegistrationController as AdminEventRegistrationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\OnlineClassController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::middleware('cache.public')->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::get('/about', [WebsiteController::class, 'about'])->name('about');
    Route::get('/programs', [WebsiteController::class, 'programs'])->name('programs');
    Route::get('/education', [WebsiteController::class, 'education'])->name('education');
    Route::get('/songs', [WebsiteController::class, 'songs'])->name('songs');
    Route::get('/events', [WebsiteController::class, 'events'])->name('events');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/leaders', [WebsiteController::class, 'leaders'])->name('leaders');
    Route::get('/register', [WebsiteController::class, 'register'])->name('register');
    Route::get('/support', [WebsiteController::class, 'support'])->name('support');
    Route::get('/privacy', [WebsiteController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [WebsiteController::class, 'terms'])->name('terms');
});
Route::get('/events/{event}/register', [EventRegistrationController::class, 'show'])->name('events.register');
Route::post('/events/{event}/register', [EventRegistrationController::class, 'store'])->name('events.register.submit');
Route::get('/events/{event}', [WebsiteController::class, 'eventShow'])->name('events.show');

// Auth routes
Route::view('/login', 'auth.login')->name('login')->middleware('guest');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request')->middleware('guest');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->middleware(['guest', 'throttle:5,1']);
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update')->middleware('guest');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        if (!Auth::user()?->is_admin) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'You do not have admin access.',
            ])->onlyInput('email');
        }

        return redirect()->intended(route('admin.dashboard'));
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ])->onlyInput('email');
})->name('login.attempt');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->middleware('auth')->name('logout');

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.submit');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.submit');
Route::get('/shop/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/order', [OrderController::class, 'store'])->name('order.submit');
Route::post('/order/paypack', [OrderController::class, 'payWithPaypack'])->name('order.paypack');
Route::view('/order/thank-you', 'website.order-thank-you')->name('order.thankyou');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('users/create', [AdminUserController::class, 'create'])->name('users.create');
    Route::post('users', [AdminUserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [AdminUserController::class, 'update'])->name('users.update');
    Route::post('users/{user}/send-reset-link', [AdminUserController::class, 'sendResetLink'])->name('users.send-reset-link');
    Route::resource('cohorts', CohortController::class)->except(['show']);
    Route::resource('members', MemberController::class)->only(['index', 'update', 'destroy']);
    Route::resource('events', EventController::class)->except(['show']);
    Route::get('event-registrations', [AdminEventRegistrationController::class, 'index'])->name('event-registrations.index');
    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('online-classes', OnlineClassController::class)->except(['show']);
    Route::resource('contacts', ContactMessageController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::resource('orders', AdminOrderController::class)->only(['index', 'update', 'destroy']);
});
