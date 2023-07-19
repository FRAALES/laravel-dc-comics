<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\MainController;


Route::get('/', [MainController :: class, 'index']) -> name('comic.index');

Route ::get("/comics/create", [MainController :: class, 'create']) -> name ('comic.create');

Route::get("/comics/{id}",[MainController :: class, 'show']) -> name ('comic.show');

Route ::post('/comics', [MainController ::class, 'store']) -> name('comic.store');

Route::get("/bonifico",[MainController :: class, 'bonifico']) -> name ('comic.bonifico');
