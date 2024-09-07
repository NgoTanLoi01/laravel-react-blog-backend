
# Blog Platform - Backend

## Overview
This is the backend of the Blog Platform, built with **Laravel**. It serves as the API provider, managing data, handling authentication, and ensuring secure interactions between the frontend and the database.

## Technologies
- **Laravel**: A PHP framework for building scalable web applications.
- **MySQL**: Database for storing user and blog post data.
- **Postman**: Used for API testing and documentation.

## Prerequisites
- **PHP** (v7.4 or above)
- **Composer** (Dependency Manager for PHP)
- **MySQL** (or any other database supported by Laravel)

## Installation

1. Clone the repository and navigate to the backend folder:
   ```bash
   git clone https://github.com/NgoTanLoi01/laravel-react-blog-backend/
2. Install the required dependencies:
   ```bash
   composer install
3. Copy the .env.example file to .env and update the following variables:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
4. Generate the application key:
   ```bash
   php artisan key:generate
5. Run the database migrations::
   ```bash
   php artisan migrate
6. Serve the application locally::
   ```bash
   php artisan serve
