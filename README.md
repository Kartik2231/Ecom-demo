# Ecom Demo — Laravel 12

## Requirements
- PHP 8.2 or newer
- Composer 2
- PHP extensions required by Laravel (including PDO, Mbstring, OpenSSL, Tokenizer, XML, Ctype, JSON, Fileinfo)

## Install and run
From this directory, run:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Open http://127.0.0.1:8000.

The starter uses SQLite for a simple local setup. If SQLite is not enabled in PHP, enable `pdo_sqlite` and `sqlite3` or configure another database in `.env`.

## Verify
```bash
php artisan about
php artisan route:list
php artisan test
```

`vendor/` is not included in this ZIP; Composer must download Laravel dependencies on a machine with internet access before Artisan commands can run.
