<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CEOMessageController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyoverviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\OverseasJobsController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('ceo', [CEOMessageController::class, 'index'])->name('ceomessage.index');
Route::get('overview', [CompanyoverviewController::class, 'index'])->name('overview.index');
Route::get('company', [CompanyController::class, 'index'])->name('company.index');
Route::get('organization', [OrganizationController::class, 'index'])->name('organization.index');
Route::get('team', [TeamController::class, 'index'])->name('team.index');
Route::get('recruitment', [RecruitmentController::class, 'index'])->name('recruitment.index');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('clients', [ClientsController::class, 'index'])->name('clients.index');

Route::resource('contact', ContactController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
Route::resource('overseas_jobs', OverseasJobsController::class);
