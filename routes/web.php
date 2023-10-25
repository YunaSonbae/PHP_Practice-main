<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/employees', [Controller\Site::class, 'employee'])
    ->middleware('auth');

Route::add('GET', '/disciplines', [Controller\Site::class, 'discipline'])
    ->middleware('auth');

Route::add('GET', '/subdivisions', [Controller\Site::class, 'subdivision'])
    ->middleware('auth');

Route::add('GET', '/error', [Controller\Site::class, 'error'])
    ->middleware('auth');

Route::add(['GET', 'POST'], '/employee', [Controller\Site::class, 'employeeProfile'])->middleware('auth');

Route::add(['GET', 'POST'], '/addEmployee', [Controller\Site::class, 'addEmployee'])->middleware('auth', 'admin');

Route::add(['GET'], '/add_discipline_employee', [Controller\Site::class, 'addDisciplineEmployee'])->middleware('auth', 'admin');