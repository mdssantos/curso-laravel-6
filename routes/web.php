<?php

Route::get('/login', function () {
    return ('Login');
})->name('login');

Route::middleware([])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return ('Home admin');
        });

        Route::get('/financeiro', function () {
            return ('Financeiro admin');
        });

        Route::get('/produtos', function () {
            return ('Produtos admin');
        });

        Route::get('/', 'Admin\TesteController@teste');

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

