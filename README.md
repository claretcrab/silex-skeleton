Silex Skeleton
==============

Welcome to the Silex Skeleton project!

This document contains information on how to start using this project.

Installation
------------

Silex uses `Composer` to ease the creation of a new project:

`$ curl -sS https://getcomposer.org/installer | php`

`$ php composer.phar install`

vhost configuration:

```
<VirtualHost *:80>
    ServerName silex-skeleton.project
    DocumentRoot "/var/www/silex-skeleton/web"

    RewriteEngine On
    #RewriteCond %{DOCUMENT_ROOT}%{REQUEST_FILENAME} !-f
    #RewriteRule ^/(.+) /index.php [QSA,L]
</VirtualHost>
```

Browsing
--------

Congratulations! You're now ready to use Silex Skeleton.

`Browse to` http://silex-skeleton.project/index_dev.php (dev environment)

`Browse to` http://silex-skeleton.project/index.php (prod environment)

Console
-------

Example console command: `$ ./bin/console my-command -e=prod`

Running Tests
-------------

`$ ./bin/phpunit`

Documentation
-------------

This distribution is meant to be the starting point for your Silex applications.

A great way to start learning Silex is via the `Documentation` http://silex.sensiolabs.org/documentation , which will
take you through all the features of Silex.

Enjoy!
