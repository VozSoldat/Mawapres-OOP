<?php

require_once './core/Router.php';
use app\core\Router;

// Admin
Router::get('/admin/beranda', function () {
    return Router::view('admin/beranda');
});


// Mahasiswa


// Kajur


// Auth
Router::get('/login', function () {
    return Router::view('auth/login');
});

Router::get('/register', function () {
    return Router::view('auth/register');
});


Router::run();