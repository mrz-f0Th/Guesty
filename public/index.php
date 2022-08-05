<?php

require_once __DIR__ . './../vendor/autoload.php';

use BukuTamu\App\Router;
use BukuTamu\Controller\AdminController;
use BukuTamu\Controller\TamuController;
use BukuTamu\Middleware\MustNotLoginMiddleware;
use BukuTamu\Middleware\MustLoginMiddleware;

// Router::add('GET', '/produk/([0-9a-zA-Z]*)/category/([0-9a-zA-Z]*)', ProdukController::class, 'categories');

Router::add('GET', '/', TamuController::class, 'index');
Router::add('GET', '/home', TamuController::class, 'home');
// Router::add('GET', '/tambah', TamuController::class, 'register');
// Router::add('POST', '/tambah', TamuController::class, 'postRegister');
Router::add('GET', '/daftar', TamuController::class, 'daftar');
Router::add('POST', '/daftar', TamuController::class, 'postDaftar');
Router::add('GET', '/scaning/([\s\S]*)', TamuController::class, 'scaning');

Router::add('GET', '/guest/([\s\S]*)', TamuController::class, 'guest');
Router::add('POST', '/guest/([\s\S]*)', TamuController::class, 'postGuest');
Router::add('GET', '/verifikasi', TamuController::class, 'verifikasi');
Router::add('POST', '/verifikasi', TamuController::class, 'postVerifikasi');



Router::add('GET', '/register', AdminController::class, 'register', [MustNotLoginMiddleware::class]);
Router::add('POST', '/register', AdminController::class, 'postRegister', [MustNotLoginMiddleware::class]);
Router::add('GET', '/login', AdminController::class, 'login', [MustNotLoginMiddleware::class]);
Router::add('POST', '/login', AdminController::class, 'postLogin', [MustNotLoginMiddleware::class]);
Router::add('GET', '/dashboard', AdminController::class, 'dashboard', [MustLoginMiddleware::class]);
Router::add('GET', '/rekap/([\s\S]*)', AdminController::class, 'rekap', [MustLoginMiddleware::class]);
Router::add('GET', '/logout', AdminController::class, 'logout', [MustLoginMiddleware::class]);
Router::add('GET', '/hapus/fotoId/([\s\S]*)', AdminController::class, 'hapus', [MustLoginMiddleware::class]);
Router::add('POST', '/dashboard', AdminController::class, 'searching', [MustLoginMiddleware::class]);
Router::add('GET', '/tensor', AdminController::class, 'tensor');


Router::run();
