<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogsafariController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\Auth\LoginController;


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


//homepage route
Route::get('/', [WelcomeController::class, 'show']);
//blog routes
Route::resource('/blog',BlogController::class);
//profile route
Route::get('/profile', [ProfileController::class, 'show']);
//FAQ routes
Route::resource('FAQ', FAQController::class);
//dashboard route
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard.show');
//blog bedrijven safari route
Route::get('/blogsafari', [BlogsafariController::class, 'show']);
//grades route
Route::resource('/grade', GradesController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
