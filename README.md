# Galactic Announcements API

A simple API serving up announcements, powered by Laravel.

## Prerequisites

You will need to have the latest version of PHP installed, with extensions fileinfo and pdo_sqlite enabled, as well as composer.

## Getting Started

After cloning the repository, you will need to install the dependencies:

```
cd /path/to/repository
composer i
```

Next, set up the database and populate it with data:

```
php artisan migrate
php artisan db:seed
```

That's it! Set up is done, the application is ready to run:

```
php artisan serve
```

It will listen on port 8000, and can be accessed at http://localhost:8000

## Endpoints

The only endpoints available right now are [/api/announcements](http://localhost:8000/api/announcements) and [/api/announcements/{id}](http://localhost:8000/api/announcements/1). The first one accepts an offset and a limit in the query string. The second is unused except for debug purposes, but it was trivial to add.