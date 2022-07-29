<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;
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

Auth::routes();

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
Route::get('admin/editprofile', [UserController::class, 'editprofile'])->name('admin/editprofile');
Route::post('admin/update_profile',[UserController::class,'update_profile'])->name('admin/update_profile');

Route::resource('user',UserController::class);
Route::resource('post',PostController::class);
// Route::resource('comment',CommentController::class);
Route::get('search', [PostController::class, 'search'])->name('search');
Route::get('addfriend/{id}', [PostController::class, 'addfriend'])->name('addfriend');
Route::get('/liked/{id}', [PostController::class, 'liked'])->name('liked');

Route::get('/search',[PostController::class, 'search'])->name('search');
Route::post('/find',[PostController::class, 'store'])->name('find');

route::post('post/store_comment',[PostController::class,'store_comment'])->name('post.store_comment');
//route::post('user/store_profile',[UserController::class,'store_profile'])->name('user.store_profile');
Route::post('store_profile',[UserController::class,'store_profile'])->name('store_profile');
Route::get('like1',[\App\Http\Controllers\PostController::class,'pressLike'])->name('pressLike');


Route::post('admin/dlt/{id}',[UserController::class,'dlt'])->name('admin.dlt');

// friend request
Route::post('/friend', [FriendController::class,'index']);
Route::post('/friend/remove', [FriendController::class,'remove'])->middleware('auth');
Route::get('/friend/{id}', [FriendController::class,'showFriends'])->middleware('auth')->name('friend.show');
Route::post('/request', [FriendController::class,'request'])->middleware('auth');

Route::post('post/like', [PostController::class, 'like'])->name('/like');

// friends request sending

Route::get('/findFriends', [FriendController::class,'findFriends']);
Route::get('/addFriend/{id}', [FriendController::class,'sendRequest']);
Route::get('/Friend_requests', [FriendController::class,'Friend_requests']);
Route::get('/accept/{name}/{id}', [FriendController::class,'accept']);
Route::get('friends', [FriendController::class,'friends']);
Route::get('/notifications/{id}', [FriendController::class,'notifications']);

Route::post('friends/dltfrd/{id}',[FriendController::class,'dltfrd'])->name('friends.dltfrd');
Route::get('/accept/{id}',[FriendController::class,'accept'])->name('friend.accept');
Route::post('friends/removefriend/{id}', [FriendController::class,'removefriend'])->name('friends.removefriend');

// accept post

Route::get('/postshow', [PostController::class,'postshow']);
Route::get('/postaccept/{id}',[postController::class,'accept'])->name('post.accept');
Route::get('/postreject/{id}',[postController::class,'postreject'])->name('post.reject');