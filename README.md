# PHP App

> A simple PHP application example using [Leap](https://github.com/joseluisq/leap).

## Requirements

[PHP 8.1](https://www.php.net/releases/8.1/en.php) or newer.

## Directory Structure

```sh
.
├── cache/              # Optional cache folder
├── config/             # Configuration folder
│   └── Config.php
├── controllers/        # Controllers folder
│   └── HomeCtrl.php
├── core/               # Application core utilities
├── database/           # Database-related folder
├── logs/               # Logging files folder (optional)
├── public/             # Web server folder
│   ├── assets/
│   └── index.php
├── routes/             # Routes folder
│   └── Routes.php
├── tests/              # Testing-related folder
├── views/              # Application views/templates folder
│   └── home.html
├── bootstrap.php       # Application entrypoint
├── composer.json
├── environment.env     # Environment template file to setup an app
├── phpstan.neon
├── phpunit.xml
```

## Usage

__Built-in server__

```sh
composer install
php -S [::]:8088 -t public/
```

__Docker Compose__

```sh
composer install
docker-compose up
```
