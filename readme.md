1) AppServiceProvider->boot() //сомментируем тело метода
2) composer update
3) composer dump-autoload
4) php artisan migrate
5) php artisan db:seed
