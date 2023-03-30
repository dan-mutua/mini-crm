>

## Mini crm

 Mini CRM is a web application built using Laravel framework that allows users to manage companies and employees data.

 ## Features

- Basic Laravel authentication with an admin account
- CRUD functionality for managing companies and employees
- Data validation using Laravel's Request classes
- Pagination for displaying data in lists
- Ability to upload company logos
- Database seeding to create the first admin account

## Requirements
- php 8.x or higher 
- Composer
- mysql 

## Installation

- Clone the repository to your local machine
- Install the PHP dependencies using Composer 
```
composer install
```
- Create a .env file by copying the example file
```
cp .env.example .env
```
- Generate an application key
```
php artisan key:generate
```
- Create a new database and update the .env file with your database credentials
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crm
DB_USERNAME=root
DB_PASSWORD=
```
- Migrate the database schema
```
php artisan migrate
```
- Seed the database with the first admin account
```
php artisan db:seed
```
- Create a symbolic link from the public/storage directory to the storage/app/public directory for storing the company logos
```
php artisan storage:link
```

## Usage
To start the application, run the following command in your terminal
```
php artisan serve
```
Then, open your web browser and navigate to http://localhost:8000. You should see the login page for the application. Use the following credentials to log in as the admin:

Email: admin@admin.com
Password: Creative123
Once you are logged in, you can manage companies and employees data using the menu in the navigation bar.


## License
This project is licensed under the MIT License. See the LICENSE file for details.