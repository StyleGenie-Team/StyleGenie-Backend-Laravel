<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view("about");
});

// (URL, View, Array Of Data)

Route::view('contact-me', "contact", [
    'page_name' => 'Contact Me Page',
    'page_description' => "<script> This Is Description </script>"
]);
