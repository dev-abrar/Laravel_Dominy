<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RollController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/Dominytech/About', [FrontendController::class, 'about'])->name('about');
Route::get('/Dominytech/Website', [FrontendController::class, 'website'])->name('website');
Route::get('/Dominytech/Ecommerce', [FrontendController::class, 'ecommerce'])->name('ecommerce');
Route::get('/Dominytech/Work', [FrontendController::class, 'work_page'])->name('work_page');
Route::get('/Dominytech/Contact Us', [FrontendController::class, 'contact'])->name('contact');

// Backend ===========
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// User
Route::get('/uesrs', [UserController::class, 'users'])->name('users')->middleware('auth');
Route::get('/uesrs/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete')->middleware('auth');
Route::get('/uesrs/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/uesrs/profile/update', [UserController::class, 'user_update'])->name('user.update')->middleware('auth');
Route::post('/uesrs/profile/password/update', [UserController::class, 'user_password'])->name('user.password')->middleware('auth');
Route::post('/uesrs/profile/photo/update', [UserController::class, 'user_photo'])->name('user.photo')->middleware('auth');

// Logos
Route::get('/logo', [LogoController::class, 'logo'])->name('logo')->middleware('auth');
Route::post('/logo/store', [LogoController::class, 'logo_store'])->name('logo.store')->middleware('auth');
Route::get('/logo/delete/{logo_id}', [LogoController::class, 'logo_delete'])->name('logo.delete')->middleware('auth');
Route::get('/logo/status/{logo_id}', [LogoController::class, 'logo_status'])->name('logo.status')->middleware('auth');

// Menus
Route::get('/menu', [MenuController::class, 'menu'])->name('menu')->middleware('auth');
Route::post('/menu/store', [MenuController::class, 'menu_store'])->name('menu.store')->middleware('auth');
Route::get('/menu/delete/{menu_id}', [MenuController::class, 'menu_delete'])->name('menu.delete')->middleware('auth');
Route::get('/menu/edit', [MenuController::class, 'menu_edit'])->name('menu.edit')->middleware('auth');
Route::post('/menu/update', [MenuController::class, 'menu_update'])->name('menu.update')->middleware('auth');

// Banner Class
Route::get('/banner/class', [BannerController::class, 'banner'])->name('banner')->middleware('auth');
Route::post('/banner/class/store', [BannerController::class, 'banner_store'])->name('banner.store')->middleware('auth');
Route::get('/banner/class/delete/{ban_id}', [BannerController::class, 'banner_delete'])->name('banner.delete')->middleware('auth');
Route::get('/banner/class/edit', [BannerController::class, 'banner_edit'])->name('banner.edit')->middleware('auth');
Route::post('/banner/class/update', [BannerController::class, 'banner_update'])->name('banner.update')->middleware('auth');

// service
Route::get('/service', [ServiceController::class, 'service'])->name('service')->middleware('auth');
Route::post('/service/store', [ServiceController::class, 'service_store'])->name('service.store')->middleware('auth');
Route::get('/service/delete/{ser_id}', [ServiceController::class, 'ser_delete'])->name('ser.delete')->middleware('auth');
Route::get('/service/edit/', [ServiceController::class, 'ser_edit'])->name('ser.edit')->middleware('auth');
Route::post('/service/update', [ServiceController::class, 'service_update'])->name('service.update')->middleware('auth');

// Team
Route::get('/team', [TeamController::class, 'team'])->name('team')->middleware('auth');
Route::post('/Member/store', [TeamController::class, 'member_store'])->name('member.store')->middleware('auth');
Route::get('/Member/delete/{member_id}', [TeamController::class, 'member_delete'])->name('member.delete')->middleware('auth');
Route::get('/Member/edit/', [TeamController::class, 'member_edit'])->name('member.edit')->middleware('auth');
Route::post('/Member/update', [TeamController::class, 'member_update'])->name('member.update')->middleware('auth');

// counter
Route::get('/Counter', [CounterController::class, 'counter'])->name('counter')->middleware('auth');
Route::post('/Counter/store', [CounterController::class, 'counter_store'])->name('counter.store')->middleware('auth');
Route::get('/Counter/delete/{counter_id}', [CounterController::class, 'counter_delete'])->name('counter.delete')->middleware('auth');
Route::get('/Counter/edit', [CounterController::class, 'counter_edit'])->name('counter.edit')->middleware('auth');
Route::post('/Counter/update', [CounterController::class, 'counter_update'])->name('counter.update')->middleware('auth');

// Portfolio
Route::get('/Portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio')->middleware('auth');
Route::post('/Portfolio/store', [PortfolioController::class, 'port_store'])->name('port.store')->middleware('auth');
Route::get('/Portfolio/delete/{port_id}', [PortfolioController::class, 'port_delete'])->name('port.delete')->middleware('auth');

// Testimonial
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial')->middleware('auth');
Route::post('/testimonial/store', [TestimonialController::class, 'test_store'])->name('test.store')->middleware('auth');
Route::get('/testimonial/delete/{test_id}', [TestimonialController::class, 'test_delete'])->name('test.delete')->middleware('auth');
Route::get('/testimonial/edit', [TestimonialController::class, 'test_edit'])->name('test.edit')->middleware('auth');
Route::post('/testimonial/update', [TestimonialController::class, 'test_update'])->name('test.update')->middleware('auth');

// Work
Route::get('/works', [WorkController::class, 'works'])->name('works')->middleware('auth');
Route::post('/work/store', [WorkController::class, 'work_store'])->name('work.store')->middleware('auth');
Route::get('/work/delete/{work_id}', [WorkController::class, 'work_delete'])->name('work.delete')->middleware('auth');
Route::get('/work/edit', [WorkController::class, 'work_edit'])->name('work.edit')->middleware('auth');
Route::post('/work/update', [WorkController::class, 'work_update'])->name('work.update')->middleware('auth');

// Message
Route::post('/Contact/Message', [MessageController::class, 'contact_message'])->name('contact.message')->middleware('auth');
Route::get('/Message', [MessageController::class, 'message'])->name('message')->middleware('auth');
Route::get('/Message/delete/{mes_id}', [MessageController::class, 'message_delete'])->name('message.delete')->middleware('auth');
Route::get('/Message/view/', [MessageController::class, 'message_view'])->name('message.view')->middleware('auth');


Route::get('/Role/Maneger', [RollController::class, 'role'])->name('role')->middleware('auth');
Route::post('/Role/Maneger/Permission', [RollController::class, 'permisson_store'])->name('permisson.store')->middleware('auth');
Route::post('/Role/Maneger/role/store', [RollController::class, 'role_store'])->name('role.store')->middleware('auth');
Route::post('/Role/Maneger/role/assign', [RollController::class, 'assign_role'])->name('assign.role')->middleware('auth');
Route::get('/Role/Maneger/Remove/Role/{user_id}', [RollController::class, 'remove_role'])->name('remove.role')->middleware('auth');
Route::get('/Role/Maneger/Role/Delete/{role_id}', [RollController::class, 'role_delete'])->name('role.delete')->middleware('auth');