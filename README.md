# Laravel 12 with Filament - Project Setup Guide

## Prerequisites
Ensure you have the following installed on your system:
- PHP 8.2 or later
- Composer
- Node.js & npm
- MySQL

## Cloning the Project
To clone the project, run:
```sh
git clone https://github.com/aminh11/pieceauto.git pfe-2025
cd pfe-2025
```

## Installing Dependencies
Run the following commands to install PHP and JavaScript dependencies:
```sh
composer install
npm install
```

## Environment Setup
Copy the `.env.example` file to `.env`:
```sh
cp .env.example .env
```
Generate the application key:
```sh
php artisan key:generate
```

## Database Setup
Update your `.env` file with your database credentials.
Then, run the migrations:
```sh
php artisan migrate
```

## Storage & Permissions
Run the following commands to set up storage:
```sh
php artisan storage:link
```

```
Create an admin user:

php artisan make:filament-user


## Running the Application
Start the local development server:
```sh
php artisan serve
```
Start Vite for frontend assets:
```sh
npm run dev
```



## License
This project is licensed under the [MIT License](LICENSE).

## Contributors
List contributors here.

## Issues & Support
For any issues, open a GitHub issue or contact the maintainer.

