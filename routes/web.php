<?php



Route::resource('products', 'ProductController');
/*

Route::delete('/products/{id}', 'ProductController@destroy');
Route::put('/products/{id}', 'ProductController@update');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');

*/

Route::get('/login', function () {
    return ('Login');
})->name('login');


/*
Route::middleware([])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::namespace('Admin')-> group(function () {

        Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');

        Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');

        Route::get('/produtos', 'TesteController@teste')->name('admin.produtos');

        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });

        });

    });

}); */

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'

], function () {


        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

        Route::get('/produtos', 'TesteController@teste')->name('produtos');

        Route::get('/', function () {
            return redirect()->route('dashboard');
        });

    });


Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/nome-url2', function () {
    return ("teste url");
})->name('url.name');

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto {$idProduct}";
});


Route::get('/categories/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::any('/any', function () {
    return ('olá');
});

Route::get('/contato', function(){

    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', function () {
    return view('register');
});

