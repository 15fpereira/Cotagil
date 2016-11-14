# Sistema Cotágil

This Project have:
-----------

- **Technologies**
  - Laravel 5.3
  - PHP 5.6
  - MySQL
  - AngularJs
  - Bootstrap 3
  - Redis
  - Algolia Search
  - jQuery


Installation
-----------

```
clone this repository
```
Run composer
```
php composer.phar install
```
Fix permissions
```
sudo chmod -R 777 storage/ && sudo chmod -R 777 bootstrap/
```
Create Schema
```
create schema homestead
```
Update .env file with your mysql credencials


Let artisan do the hard work for you
```
php artisan migrate
php artisan db:seed
```
Sign Up

This project doesn't have a register addresses form yet, then you have to assign manually

Assign some addresses for your user (id 101)
```
UPDATE enderecos SET usuario_id = 101 WHERE id IN (10,20,30,40,50);
```
Now you're good to go !!!
