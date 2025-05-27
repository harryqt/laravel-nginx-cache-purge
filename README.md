# Laravel Nginx FastCGI Cache Purge

A simple Laravel package to purge Nginx FastCGI cache programmatically.

## 🧰 Features

- Purge specific URLs or paths
- Clear entire cache
- Integrates easily into Laravel applications

## 💾 Installation

Install via Composer:

```sh
composer require harryqt/laravel-nginx-cache-purge
```

## Publish Config

```sh
php artisan vendor:publish --provider="Harryqt\NginxCachePurge\NginxCachePurgeServiceProvider"
```
