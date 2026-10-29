<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// 1. Shop 
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop-grid', function () {
    return view('shop-grid');
})->name('shop-grid');

// 3. Checkout 
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// 4. Product 
Route::get('/product', function () {
    return view('single-product');
})->name('product');


// 5. Shop Compare
Route::get('/shop-compare', function () {
    return view('shop-compare');
})->name('shop-compare');

// 6. Shop Wishlist
Route::get('/shop-wishlist', function () {
    return view('shop-wishlist');
})->name('shop-wishlist');


// 7 Shop grid 2
Route::get('/shop-grid-2', function () {
    return view('shop-grid2');
})->name('shop-grid-2');

// Shop Vendor
Route::get('/shop-vendor', function () {
    return view('shop-vendor');
})->name('shop-vendor');


// about-us
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// 8 contact-us
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');


// Carrer
Route::get('/career', function () {
    return view('career');
})->name('career');

// terms & conditions
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

// Blogs
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

// 404 error page
Route::get('/404-page', function () {
    return view('404-page');
})->name('404-page');
