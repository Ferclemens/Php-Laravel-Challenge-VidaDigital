-------------------------------------------------------------------------------------
# Challenge - PHP | Laravel | MySQL - Vida Digital - 2022
-------------------------------------------------------------------------------------
## Objetives:
#### - Create a interface to management commerce (empresa) with branch offices (sucursales) and employes (empleados) using Laravel 9 and MySQL data base.
## Features:
#### - Create, read, update and delete (CRUD) commerce, branch offices and employes, with corresponding relations between them (Foreign key in DB).
#### - Responsive Desing.
#### - Using Bootstrap to add styles.
## Dev tools:
- Git 2.30.1 | https://git-scm.com/
- MySQL Workbench 8.0 CE | https://www.mysql.com/products/workbench/
- Visual Studio Code | https://code.visualstudio.com/
- Bootstrap 5.2.2 | https://getbootstrap.com/docs/5.2/getting-started/introduction/
- Livewire 2.10 | https://laravel-livewire.com/

## Work organization: 
#### - Trello | https://trello.com/b/fMbjXM4E/php-mysql-crud-vida-digital
#### - MER diagram | https://trello.com/c/JgXvH34u/25-diagrama-mer

## //-----Getting Started with Laravel-----//

##### - First Step, install XAMPP. A popular environment to develop with PHP. 
##### https://www.apachefriends.org/es/
##### - Next, install Composer, a dependency manager for PHP.
##### https://getcomposer.org/

##  //-----Steps to Run the project with Git and Laravel-----//

## Open a terminal in the destination folder and clone the repository, using the commands:

##### git init
##### git clone https://github.com/Ferclemens/Php-Laravel-Challenge-VidaDigital.git

## Enter the project folder:

##### cd Php-Laravel-Challenge-VidaDigital

## Install dependencies:

##### composer install

## Once the installation is finished, create and configure a data base:

##### Create DB with MySQL Workbench (ej: php-mysql)
##### In Visual Studio, go to .env.example file and configure Connection to db:
##### (example)
##### ..... 
##### DB_CONNECTION=mysql
##### DB_HOST=localhost
##### DB_PORT=3306
##### DB_DATABASE=php-mysql
##### DB_USERNAME=root
##### DB_PASSWORD=secret
##### ....
##### Done, rename file to .env only.

## Create APP_KEY and make migrations:
##### In Terminal, create a unique app key. Enter:
##### php artisan key:generate

##### Make migrations with command:
##### php artisan migrate

## RUN!
##### Run server in local, enter:
##### php artisan serve

##### If everyting ok, show a message like:
##### Server running on [http://localhost:3306].

## Done!, ✨Happy Coding!✨
