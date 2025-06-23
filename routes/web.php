<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Login;


Route::get('/',Login::class)->name('login');

 Route::middleware(['auth'])->group(function () {
Route::get('/dashboard',Dashboard::class)->name('dashboard');
// Products Routes
Route::prefix('products')->name('products.')->group(function () {

    Route::get('new-brand', \App\Livewire\Products\Brands::class)->name('brand');
    Route::get('new-category', \App\Livewire\Products\Catagories::class)->name('category');
    Route::get('new', \App\Livewire\Products\NewProduct::class)->name('new');
    Route::get('edit-product/{id}', \App\Livewire\Products\Editproduct::class)->name('editproduct');
    Route::get('stock-management',\App\Livewire\Products\StockManagement::class)->name('stock-management');
    Route::get('stock.detail/{id}',\App\Livewire\Products\StockDetail::class)->name('stock.detail');

});

// Customers Routes
Route::prefix('customers')->name('customers.')->group(function () {
    Route::get('create', \App\Livewire\Customers\CreateCustomer::class)->name('create');
     Route::get('edit-customer/{id}', \App\Livewire\Customers\Editcustomer::class)->name('edit.customer');
    Route::get('history', \App\Livewire\Customers\History::class)->name('history');
});

// Sales Routes
Route::prefix('sales')->name('sales.')->group(function () {
    Route::get('new', \App\Livewire\Sales\NewSale::class)->name('new');
    Route::get('history', \App\Livewire\Sales\History::class)->name('history');
     Route::get('saledetail/{id}', \App\Livewire\Sales\Saledetail::class)->name('detail');

});

// Users Routes
Route::prefix('users')->name('users.')->group(function () {
    Route::get('create', \App\Livewire\Users\CreateUser::class)->name('create');
    Route::get('all', \App\Livewire\Users\AllUsers::class)->name('all');
});

// Analytics
Route::get('/analytics', \App\Livewire\Analytics::class)->name('analytics');

// Settings
Route::get('/setting', \App\Livewire\Setting::class)->name('setting');
 });

Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('login'));
})->name('logout');


// Your existing routes...

Route::get('/language/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'tr'])) {
        abort(400, 'Invalid language');
    }

    session()->put('locale', $lang);
    return redirect()->back();
})->name('language.switch');