#This Program was built by Akintola Oluwaseun Patrick
#Here you can find the guide to setup this project
#Install Laravel, I am using version 11.2, ensure you setup a database I am Using MYSQL, you can make use of other DBMS
#Setup Controllers in app\Http\Controllers folder Create Login, Register Controller
#Setup Models in app\Models create RegisterUser Model
#Make sure you setup Migrations when creating your models using this command "php artisan make:model --Model Name-- then -m as a suffice"
#In models table, we can create our columns and add neccessary data types representation for the database.
#Lastly we setup Routes in routes\api directory and include our Controllers and named API routes using the various api request, such as POST for Registration and Login and GET for showcasing Data.
Go to localhost/phpmyadmin if you are using xampp, ensure you have xammp installed  hence, we can go to phpmyadmin and create a new database named api
Database for Users is already automated in Laravel by default, let me setup database myself just for reference purpose, d code to create database for users who can login and signup is:

php artisan make:model UserRegistration -m, however laravel already ship with a Users model by default so i would be making use of that.

then i run php artisan make:model UserPost -m for the CRUD 
and then setup the migrations and run php artisan migrate
