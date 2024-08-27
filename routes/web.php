<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user/index');
});

Route::get('/gioi-thieu', function () {
    return view('user/introduction');
});

Route::get('/video-hom-nay', function () {
    return view('user/today_video');
});

Route::get('/tin-tuc', function () {
    return view('user/news');
});

Route::get('/dang-ky', function () {
    return view('user/register');
});

Route::get('/dang-nhap', function () {
    return view('user/login');
});

Route::get('/quen-mat-khau', function () {
    return view('user/forgot_password');
});

Route::get('/xem-video', function () {
    return view('user/watch_videos');
});