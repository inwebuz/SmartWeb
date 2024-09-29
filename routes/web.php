<?php

use App\Livewire\Contacts;
use App\Livewire\Home;
use App\Livewire\Page;
use App\Livewire\Project;
use App\Livewire\Projects;
use App\Livewire\Service;
use App\Livewire\Services;
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

Route::get('/', Home::class)->name('home');
Route::get('/xizmatlar', Services::class)->name('services');
Route::get('/xizmatlar/{slug}', Service::class)->name('service');
Route::get('/lohiyalar', Projects::class)->name('projects');
Route::get('/loyihalar/{slug}', Project::class)->name('project');
Route::get('/aloqa', Contacts::class)->name('contacts');
Route::get('/{slug}', Page::class)->name('page');
