<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Router;
use App\Http\Controllers\Service;
use App\Http\Controllers\Contact;


Route::get('/', [Router::class , 'home'])->name('home');
Route::get('/about', [Router::class , 'about'])->name('about');
Route::get('/contact', [Router::class , 'contactus'])->name('contactus');
Route::get('/services', [Router::class , 'services'])->name('services');

// SERVICES ROUTES 
Route::get('/services/it-solutions', [Service::class , 'itsolutions'])->name('itSolutions');
Route::get('/services/finance-solutions', [Service::class , 'financeSolutions'])->name('financeSolutions');
Route::get('/services/advertising', [Service::class , 'advertising'])->name('advertising');
Route::get('/services/hr-solutions', [Service::class , 'hrSolutions'])->name('hrSolutions');

// CONTACT US ROUTES 
Route::get('/contact/client', [Contact::class , 'client'])->name('client');
Route::get('/contact/employee', [Contact::class , 'employee'])->name('employee');
Route::get('/contact/supplier', [Contact::class , 'supplier'])->name('supplier');
Route::post('/contact/newclient', [Contact::class , 'newClient'])->name('newClient');
Route::post('/contact/newemployee', [Contact::class , 'newEmployee'])->name('newEmployee');
Route::post('/contact/newsupplier', [Contact::class , 'newSupplier'])->name('newSupplier');
Route::post('/contact/newcontact', [Contact::class , 'newContact'])->name('newContact');
