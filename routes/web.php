<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


// return response('', 404);

Route::get('/', HomeController::class);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/example', function () {
//     // $user = User::find(1);
//     // dd($user->posts); #We're accessing the Posts method as a property
                         
//     // $user = User::find(1);
//     // dd($user->posts);

//     $user = User::find(1);
//     $user->posts()->create([
//         'title' => 'xyz',
//         'body' => 'asdf'
//     ]);

//     // Post::create([
//     //     'title' => 'Abc',
//     //     'body' => 'def',
//     //     'user_id' => 1
//     // ]);

//     // $posts = Post::get();
//     // $posts = Post::first();
//     // $post = Post::find($id);
//     // $post = Post::where('id', '>', 1)->get();
//     # Creating a Post
//     // $post = POST::create([
//     //     'title' => 'New post',
//     //     'body' => 'Post body'
//     // ]);
//     # Updating a Post
//     // $post = Post::find(4);
//     // $post->update([
//     //     'body' => 'Updated body'
//     // ]);
//     #Deleting a post
//     // $post = POST::where('id', '>', 1);
    
//     // dd($post->delete());
// });


// Route::get('/posts/{id}', function($id) {
//     $local = 1; # You can also output a local variable
//     return view('posts.show', [
//         'id' => $id,
//         'local' => $local
//     ]);
// });

// Route::get('/about', function() {
//     return 'About';
// })->name('about');

// Route::get('/users/{id}/{username}', function ($id, $username) {
//     return $id . ' ' . $username;
// });

# middleware,namespace,prefix can be used in route group
// Route::group(['prefix' => '/user'], function() {
//     Route::get('/profile', function (){
//         return 'Profile';
//     });

//     Route::get('/password', function (){
//         return 'Password';
//     });
// });
# middleware can also be added at the end of the route(group)