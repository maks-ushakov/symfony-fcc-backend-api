API Project on Symfony 
========================

The FreeCodeCamp API Projects solved using PHP and Symfony 4.3 framework.

## About

This project started for the learning reason. The main purpose of the project is to get some experience with Composer and Symfony PHP Framework

## Requirements

 - PHP 7.1 and highter
 - Composer 1.9
 - Symfony 4.3

## Installation

Get the source code from git
```bash
git clone https://github.com/maks-ushakov/symfony-fcc-backend-api.git
```

Change directory to project
```bash
cd symfony-fcc-backend-api
```

Install dependencies
```bash
composer install
```

Edit or create `.env` file

Run server
```bash
php bin/console server:run
```

Or start server for long time
```bash
php bin/console server:start
```

## Apache config

You can install project to Apache directory, then write path to `/public` on the Apache config

For Ubuntu and Apache2 you can create virtual host `/etc/apache2/sites-available/fccapi.local.conf`:
```apacheconfig
<VirtualHost *:80>
	ServerName fccapi.local
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/htdocs/symfony-fcc-backend-api/public

	<Directory "/var/www/htdocs/symfony-fcc-backend-api/public">
        AllowOverride All
        Order Allow,Deny
        Allow from All
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error-fccapi.log
	CustomLog ${APACHE_LOG_DIR}/access-fccapi.log combined
</VirtualHost>

```


## use cases
 - [Timestamp Microservice](cases/timestamp.md)
 - [Header Parser](cases/headerparser.md)
 - [File Metadata](cases/filemetadata.md)
 - [Exercise Tracker](cases/exercisetraker.md)
