<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [App\Http\Controllers\HelloController::class, 'hello'] );


Route::get('/goodbye/{name}', function(string $name) {
    return 'Goodbye: ' . $name;
});


// Route::get('/example', function() {
//     return 'GET';
// });



// rest api
$uri = '/example';
Route::get($uri, fn() => 'Hi GET');
Route::post($uri, fn() => 'Hi POST'); // if there is a problem with error 419 see /Applications/MAMP/htdocs/PRACA/LaravelTest1/app/Http/Kernel.php and property middlewareGroups \App\Http\Middleware\VerifyCsrfToken::class,
Route::put($uri, fn() => 'Hi PUT');
Route::patch($uri, fn() => 'Hi PATCH');
Route::delete($uri, fn() => 'Hi DELETE');
Route::options($uri, fn() => 'Hi OPTIONS');

// match post and get to one function
Route::match(['get', 'post'], '/match', function() {
    return 'ok! it is get or post';
});

// any request
Route::any('all', fn() => 'ALL methods allowed');

$data = [
    'data' => ['key' =>'value1'],
    'name' => 'Rafal'
];
Route::view('/contact', 'contact', $data);

Route::view(
    '/view/route/var1',
    'route.viewParam',
    $data
);

Route::view(
    '/viewParamRoute',
    'route.viewParam',
    $data
);
// Route::resource()

Route::get('posts/{postId}', function(int $postId) {
    dd($postId);
});


// Route::get('users/{nick?}', function(?string $nick = null) {
//     dd($nick);
// });

// regexp in route
Route::get('users/{nick}', function(string $nick = 'anonymous') {
    dd($nick);
})->where(['nick' => '[a-z]+']);
