<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\LoginRequest;
use App\Http\Middleware\CheckAccountStatus;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\TagsController;


/* Public */
//get 
Route::get('/', [userController::class , "index"]);
Route::get('/login' , [authController::class , "showLogin"]);
Route::get('/register' , [authController::class , "showRegister"]);

//post
Route::post('/login' , [authController::class , "login"])->name('auth.login');
Route::post('/register' , [authController::class , "register"])->name('auth.register');


/* Private */ 
Route::middleware(Authenticate::class)->group(function () {
    //get
    Route::get('/home' , [userController::class , 'showHome'])->middleware(CheckAccountStatus::class);
    Route::get('/categories' , [CategoriesController::class , 'index'])->middleware(CheckAccountStatus::class)->name('categories.index');
    Route::get('/categorie/{id}' , [CategoriesController::class , 'showCategorie'])->middleware(CheckAccountStatus::class);
    Route::get('/links' , [LinksController::class , 'index'])->middleware(CheckAccountStatus::class)->name('links.index');
    Route::get('/tags' , [TagsController::class , 'index'])->middleware(CheckAccountStatus::class);
    Route::get('/sharedLinks' , [LinksController::class , 'showSharedLinks'])->middleware(CheckAccountStatus::class);

    //post
    Route::post('/logout' , [authController::class , "logout"])->name('auth.logout');
    Route::post('/addCategorie' , [CategoriesController::class , 'store'])->name('create.categorie');
    Route::post('/addLink' , [LinksController::class , 'store'])->name('create.link');
    Route::post('/addTag' , [TagsController::class , 'store'])->name('create.tag');
    Route::post('/shareLink' , [LinksController::class , 'shareLinkInApp'])->name('shareLink.App');

    //put
    Route::put('/editCategorie' , [CategoriesController::class , 'update'])->name('edit.categorie');
    Route::put('/editLink' , [LinksController::class , 'update'])->name('edit.link');

    //delete
    Route::delete('/deleteCategorie' , [CategoriesController::class , 'destroy'])->name('delete.categorie');
    Route::delete('/deleteLink' , [LinksController::class , 'destroy'])->name('delete.link');
    Route::delete('/deleteTag' , [TagsController::class , 'destroy'])->name('delete.tag');
});