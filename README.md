## Creating a Laravel Project
Before creating your first Laravel project, make sure that your local machine has PHP and Composer installed. If you are developing on macOS or Windows, PHP and Composer can be installed in minutes via Laravel Herd. In addition, we recommend installing Node and NPM.

<code>composer create-project laravel/laravel example-app
</code>

nce the project has been created, start Laravel's local development server using Laravel Artisan's serve command:

<code>cd example-app

php artisan serve</code>

## Databases and Migrations
Now that you have created your Laravel application, you probably want to store some data in a database. By default, your application's .env configuration file specifies that Laravel will be interacting with a SQLite database.

If you prefer to use another database driver such as MySQL or PostgreSQL, you can update your .env configuration file to use the appropriate database.

<code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code>

If you choose to use a database other than SQLite, you will need to create the database and run your application's database migrations:

<code> php artisan migrate</code>

## Introduction
Laravel can display an overview of your application's configuration, drivers, and environment via the about Artisan command

<code>php artisan about</code>

Or, to explore a specific configuration file's values in detail, you may use the config:show Artisan command:

<code>php artisan config:show database</code>

Your .env file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration

## Maintenance Mode
To enable maintenance mode, execute the down Artisan command:

<code>php artisan down</code>

To disable maintenance mode, use the up command:

<code>php artisan up</code>

You may customize the default maintenance mode template by defining your own template at resources/views/errors/503.blade.php.


## Directory Structure

The App Directory
The app directory contains the core code of your application. We'll explore this directory in more detail soon; however, almost all of the classes in your application will be in this directory.

The Bootstrap Directory
The bootstrap directory contains the app.php file which bootstraps the framework. This directory also houses a cache directory which contains framework generated files for performance optimization such as the route and services cache files.

The Config Directory
The config directory, as the name implies, contains all of your application's configuration files. It's a great idea to read through all of these files and familiarize yourself with all of the options available to you.

The Database Directory
The database directory contains your database migrations, model factories, and seeds. If you wish, you may also use this directory to hold an SQLite database.

The Public Directory
The public directory contains the index.php file, which is the entry point for all requests entering your application and configures autoloading. This directory also houses your assets such as images, JavaScript, and CSS.

The Resources Directory
The resources directory contains your views as well as your raw, un-compiled assets such as CSS or JavaScript.

The Routes Directory
The routes directory contains all of the route definitions for your application. By default, two route files are included with Laravel: web.php and console.php.

The web.php file contains routes that Laravel places in the web middleware group, which provides session state, CSRF protection, and cookie encryption. If your application does not offer a stateless, RESTful API then all your routes will most likely be defined in the web.php file.

The console.php file is where you may define all of your closure based console commands. Each closure is bound to a command instance allowing a simple approach to interacting with each command's IO methods. Even though this file does not define HTTP routes, it defines console based entry points (routes) into your application. You may also schedule tasks in the console.php file.

Optionally, you may install additional route files for API routes (api.php) and broadcasting channels (channels.php), via the install:api and install:broadcasting Artisan commands.

The api.php file contains routes that are intended to be stateless, so requests entering the application through these routes are intended to be authenticated via tokens and will not have access to session state.

The channels.php file is where you may register all of the event broadcasting channels that your application supports.

The Storage Directory
The storage directory contains your logs, compiled Blade templates, file based sessions, file caches, and other files generated by the framework. This directory is segregated into app, framework, and logs directories. The app directory may be used to store any files generated by your application. The framework directory is used to store framework generated files and caches. Finally, the logs directory contains your application's log files.

The storage/app/public directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible. You should create a symbolic link at public/storage which points to this directory. You may create the link using the php artisan storage:link Artisan command.

The Tests Directory
The tests directory contains your automated tests. Example Pest or PHPUnit unit tests and feature tests are provided out of the box. Each test class should be suffixed with the word Test. You may run your tests using the /vendor/bin/pest or /vendor/bin/phpunit commands. Or, if you would like a more detailed and beautiful representation of your test results, you may run your tests using the php artisan test Artisan command.

The Vendor Directory
The vendor directory contains your Composer dependencies.


## App directory
By default, the app directory contains the Http, Models, and Providers directories. However, over time, a variety of other directories will be generated inside the app directory as you use the make Artisan commands to generate classes. For example, the app/Console directory will not exist until you execute the make:command Artisan command to generate a command class.

The App Directory
The Broadcasting Directory
The Console Directory
The Events Directory
The Exceptions Directory
The Http Directory
The Jobs Directory
The Listeners Directory
The Mail Directory
The Models Directory
The Notifications Directory
The Policies Directory
The Providers Directory
The Rules Directory


## Frontend

In Laravel, this approach to rendering HTML can still be achieved using views and Blade. Blade is an extremely light-weight templating language that provides convenient, short syntax for displaying data, iterating over data, and more:

<div>
    @foreach ($users as $user)
        Hello, {{ $user->name }} <br />
    @endforeach
</div>


## Laravel Breeze
Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. In addition, Breeze includes a simple "profile" page where the user may update their name, email address, and password.

If you have already created a new Laravel application without a starter kit, you may manually install Laravel Breeze using Composer:

composer require laravel/breeze --dev

The breeze:install command will prompt you for your preferred frontend stack and testing framework:

php artisan breeze:install

php artisan migrate
npm install
npm run dev


