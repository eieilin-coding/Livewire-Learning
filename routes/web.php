<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\UserAdd;
use App\Livewire\Users\UserDetail;
use App\Livewire\Users\UserList;

Route::view('/', 'welcome');

Route::get('/users', UserList::class);
Route::get('/users/view/{id}', UserDetail::class);
Route::get('/users/add', UserAdd::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::view('superadmin/user/index','superadmin.user.index')->name('superadmin.user.index');

Route::view('superadmin/category/index','superadmin.category.index')->name('superadmin.category.index');

Route::view('superadmin/product/index','superadmin.product.index')->name('superadmin.product.index');
Route::view('admin/product/index','admin.product.index')->name('admin.product.index');



require __DIR__.'/auth.php';
