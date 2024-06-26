<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Food Management API

This Laravel project, named Food Management, provides CRUD operations for managing travel packages. It utilizes API routes for CRUD functionality and implements API authentication for secure access.

## Installation

1. *Clone the Repository*: 
bash
git clone https://github.com/PadmajanJram/Food-Manager-using-Laravel.git

2. *Navigate to Project Directory:*
bash
cd foodmanagement-Php-Laravel


3.*Install Dependencies:*
bash
composer install

4.*Configure Database:*
bash

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Type your database name
DB_USERNAME=Type your username
DB_PASSWORD=Type your password

5.*Run Migrations:*
bash
php artisan migrate

6.*Start Development Server:*
bash
php artisan serve


## API Routes

### Authentication Routes

- *POST* /signup: Register a new user.
- *POST* /login: Authenticate a user.

### Protected Routes (Require Authentication)

- *POST* /create: Create a new product. Requires authentication.
- *GET* /products: Get all products. Requires authentication.
- *GET* /products/{id}/details: Get details of a specific product. Requires authentication.
- *POST* /products/{id}/update: Update details of a specific product. Requires authentication.
- *DELETE* /products/{id}/delete: Delete a specific product. Requires authentication.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).