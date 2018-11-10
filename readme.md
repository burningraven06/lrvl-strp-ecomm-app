### Laravel App

##### Backend - *Laravel*
##### Frontend Design - *Materialize*

##### Database - *PostgreSQL*
##### Payment - *Stripe*

### To Test This

##### Install Package Dependencies
```sh
$ cd ms-lrvl-shoppingcart-yt
$ composer install
```

##### Setup ENV Vars (at the root of the project)
```sh 
$ touch .env
```

Update .env File : 
```
STRIPE_SECRET_KEY=<YOUR_STRIPE_KEY>
DB_CONNECTION=<YOUR_DB_DRIVER>
DB_HOST=<YOUR_DB_HOST>
DB_PORT=<YOUR_DB_PORT>
DB_DATABASE=<YOUR_DB_NAME>
DB_USERNAME=<YOUR_DB_USERNAME>
DB_PASSWORD=<YOUR_DB_PASSWORD>
```

##### Run App
```php artisan serve```