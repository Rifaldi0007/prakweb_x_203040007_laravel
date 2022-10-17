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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
       "title" => "About",
       "name" => "Faldi arsandi",
        "email" => "rifaldia513@gmail.com",
        "image" => "Faldi.jpg"
    ]);
});


Route::get('/blog', function () {
    
$blog_posts = [
    [
        "title" => "judul post pertama",
        "slug" => "judul-post-pertama",
        "author" => "Falz",
        "body" => "Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi
        exercitationem corrupti necessitatibus illo debitis, nesciunt accusantium. Ea molestias praesentium fugiat quas libero quam suscipit placeat eum incidunt provident est quaerat, reiciendis doloribus esse omnis quasi soluta excepturi autem deleniti? Vero ad sit, corporis earum impedit voluptatum provident 
        quibusdam, eligendi optio assumenda minus a temporibus commodi dolores magni expedita praesentium rem."
    ],

    [
        "title" => "judul post kedua",
        "slug" => "judul-post-kedua",
        "author" => "Dodi",
        "body" => "Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. 
        Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi"
    ],
];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route ::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Falz",
            "body" => "Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi
            exercitationem corrupti necessitatibus illo debitis, nesciunt accusantium. Ea molestias praesentium fugiat quas libero quam suscipit placeat eum incidunt provident est quaerat, reiciendis doloribus esse omnis quasi soluta excepturi autem deleniti? Vero ad sit, corporis earum impedit voluptatum provident 
            quibusdam, eligendi optio assumenda minus a temporibus commodi dolores magni expedita praesentium rem."
        ],
    
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. 
            Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi"
        ],
    ];

    $new_post =[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});