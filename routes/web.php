<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/contato', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{blog:slug}', 'blogShow')->name('blog.show');
    Route::get('/sobre-nos', 'about')->name('about');
});

Route::controller(IndustryController::class)->group(function () {
    Route::get('/industria/sobre', 'index')->name('industry.about');
    Route::get('/industria/servicos', 'services')->name('industry.services');
    Route::get('/industria/faq', 'faq')->name('industry.faq');
    Route::get('/industria/parceiro', 'partners')->name('industry.partners');
});

Route::controller(EnvironmentController::class)->group(function () {
    Route::get('/ambientes/sobre', 'index')->name('environment.about');
    Route::get('/ambientes/servicos', 'services')->name('environment.services');
    Route::get('/ambientes/parceiro', 'partners')->name('environment.partners');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contato', 'send')->name('send.contact');
});

Route::controller(NewsletterController::class)->group(function () {
    Route::post('/', 'subscribe')->name('newsletter');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('/loja', 'index')->name('shop');
    Route::get('/loja/carrinho', 'cart')->name('shop.cart');
    Route::get('/loja/{product:slug}', 'show')->name('shop.show');
    Route::post('/loja', 'store')->name('shop.store');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [PanelController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [ProfileAdminController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileAdminController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileAdminController::class, 'destroy'])->name('admin.profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resources([
            'pages' => PageController::class,
            'contacts' => AdminContactController::class,
            'categories' => CategoryController::class,
            'products' => ProductController::class,
        ]);

        //ROTAS ADICIONAIS CONTACT
        Route::get('/contacts/inactive', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::patch('/contacts/{contact}/active', [AdminContactController::class, 'active'])->name('contacts.active');
    });
});

require __DIR__.'/authadmin.php';
