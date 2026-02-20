#!/usr/bin/env bash
php artisan migrate --force
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan storage:link
php artisan optimize
php-fpm