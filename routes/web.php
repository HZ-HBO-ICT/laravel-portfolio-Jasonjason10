<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogsafariController;
use App\Http\Controllers\FAQController;


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

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post is not here.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});

//Route::get('/', function () {
//    return view('welcome');
//});
//homepage route
Route::get('/', [WelcomeController::class, 'show']);
//blog routes
Route::get('/blog', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/edit/{blogs}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blogs}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::delete('/blog/{blogs}', [BlogController::class, 'destroy'])->name('blog.destroy');
//profile route
Route::get('/profile', [ProfileController::class, 'show']);
//FAQ routes
Route::get('/FAQ', [FAQController::class, 'show'])->name('faq.show');
Route::get('/FAQ/edit/{post}', [FAQController::class, 'edit']);
Route::put('/FAQ/{post}', [FAQController::class, 'update']);
Route::get('/FAQ/create', [FAQController::class, 'create']);
Route::post('/FAQ', [FAQController::class, 'store']);
Route::delete('/FAQ/{post}', [FAQController::class, 'destroy']);
//dashboard route
Route::get('/dashboard', [DashboardController::class, 'show']);
//blog bedrijven safari route
Route::get('/blogsafari', [BlogsafariController::class, 'show']);
Route::get('/{name}', [PortfolioController::class, 'show']);
