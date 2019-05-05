<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

<ol>
    <li>download or clone project</li>
    <li>Go to the folder application using cd</li>
    <li>Run composer install on your cmd or terminal</li>
    <li>Copy .env.example file to .env on root folder.You can type copy .env.example .env if using command prompt Windows</li>
    <li>Open your .env file and change the database name (DB_DATABASE)</li>
    <li>Run php artisan key:generate</li>
    <li>Run php artisan migrate</li>
    <li>Run php artisan serve</li>
</ol>

Laravel is accessible, powerful, and provides tools required for large, robust applications.


This Excample Laravel 5.7 Excel -Import Export


<h4> composer require "maatwebsite/excel:~2.1.0" </h4>

Config app.php

<p>  Maatwebsite\Excel\ExcelServiceProvider::class, </p>

<p>  Laravel\Tinker\TinkerServiceProvider::class, </p>

<p> 'Excel' => Maatwebsite\Excel\Facades\Excel::class, </p>

<h3>Create DataBase Table</h3>

php artisan make:migration create_cache_table --create=cache

php artisan make:migration create_books_table --create=books

<h4>Create Controller</h4>

php artisan make:controller BookController

<h4>Create Model</h4>

php artisan make:model Author

php artisan make:model Book



































































































































































