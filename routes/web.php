<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard/ecommerce', [DashboardController::class, 'index'])->name('dashboard.ecommerce');
Route::get('/dashboard/project', [DashboardController::class, 'project'])->name('dashboard.project');
Route::get('/dashboard/crm', [DashboardController::class, 'crm'])->name('dashboard.crm');
Route::get('/dashboard/chat', [DashboardController::class, 'chat'])->name('dashboard.chat');
Route::get('/dashboard/mail', [DashboardController::class, 'mail'])->name('dashboard.mail');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
Route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
Route::get('/dashboard/login', [DashboardController::class, 'login'])->name('dashboard.login');
Route::get('/dashboard/register', [DashboardController::class, 'register'])->name('dashboard.register');
Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('dashboard.analytics');
Route::get('/dashboard/hrm', [DashboardController::class, 'hrm'])->name('dashboard.hrm');
Route::get('/dashboard/time-tracker', [DashboardController::class, 'timeTracker'])->name('dashboard.time_tracker');
Route::get('/dashboard/hiring', [DashboardController::class, 'hiring'])->name('dashboard.hiring');
Route::get('/dashboard/ecommerce/customer', [DashboardController::class, 'ecommerceCustomer'])->name('dashboard.ecommerce.customer');
Route::get('/dashboard/crm/leads', [DashboardController::class, 'crmLeads'])->name('dashboard.crm.leads');
Route::get('/dashboard/kanban', [DashboardController::class, 'kanban'])->name('dashboard.kanban');
Route::get('/dashboard/landing', [DashboardController::class, 'landing'])->name('dashboard.landing');
Route::get('/dashboard/help', [DashboardController::class, 'help'])->name('dashboard.help');
Route::get('/dashboard/pricing', [DashboardController::class, 'pricing'])->name('dashboard.pricing');
Route::get('/dashboard/faq', [DashboardController::class, 'faq'])->name('dashboard.faq');
Route::get('/dashboard/showcase', [DashboardController::class, 'showcase'])->name('dashboard.showcase');
Route::get('/dashboard/docs', [DashboardController::class, 'docs'])->name('dashboard.docs');
Route::get('/dashboard/components', [DashboardController::class, 'components'])->name('dashboard.components');
Route::get('/dashboard/components/{type}', [DashboardController::class, 'componentDetail'])->name('dashboard.component.detail');
Route::get('/dashboard/changelog', [DashboardController::class, 'changelog'])->name('dashboard.changelog');
Route::get('/dashboard/migration', [DashboardController::class, 'migration'])->name('dashboard.migration');
Route::get('/dashboard/file-manager', [DashboardController::class, 'fileManager'])->name('dashboard.file_manager');
