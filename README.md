# Laravel 5 &amp; Firebase Chatroom

### Requirements
- Laravel 5.6
- Laravel Firebase Sync by [@mpociot](https://github.com/mpociot)
- Git bash installed on the system
- wamp/xammp installed
- internet connection

### Installation
- Clone this repository
```
 git clone https://github.com/kabele/censore-social.git
```
- Run these commands
```
cd censore-social
composer install

# create .env file
cp .env.example .env

# migrate database
php artisan key:generate

# Set your database connection in .env file
php artisan migrate
```
- Done

### Firebase database

you can view the Firebase database file on the web here

### License
MIT License
