<?php

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


Route::get('hello/{id?}/{pass?}', 'HelloController@index');


Route::get('hello1/{id}/{msg?}', function ($id,$msg='default') {
    $hello = <<<EOF
        <html>
            <head>
                <title>Hello!</title>
                <style>
                    body {font-size:16pt; color:#999;}
                    h1 {font-size:100pt; text-align:right; color:#eee;
                        margin:-40px 0px -50px 0px;}
                </style>
            </head>
            <body>
                <h1>Hello</h1>
                <p>{$id}</p>
                <p>{$msg}</p>
                <p>This is Sample page.</p>
            </body>
        </html>
    EOF;

    return $hello;
});
