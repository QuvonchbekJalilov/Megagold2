<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutAllController;
use App\Http\Controllers\ActiveClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryOfProductController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin-index');
        Route::resource('/home', HomeController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/image', ImageController::class);
        Route::resource('/category_of_product', CategoryOfProductController::class);
        Route::resource('/commit', CommitController::class);
        Route::resource('/active_client', ActiveClientController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/contact', ContactController::class);
        Route::resource('/link', LinkController::class);
        Route::resource('/blog', BlogController::class);
        Route::resource('/profile', UserController::class);
        Route::resource('orders', OrderController::class);
        Route::post('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [MainController::class, 'single_blog'])->name('single_blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/category', [MainController::class, 'category'])->name('category');
Route::get('/product/{product}', [MainController::class, 'products'])->name('products');

Route::post('orders.store', [OrderController::class, 'store'])->name('orders.store');
Route::get('/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
});
