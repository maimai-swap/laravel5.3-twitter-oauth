# Laravel 5.3 socialite socialiteprovider/twitter sample

## usage


* install libraries
```
composer install
php vendor/bin/homestead make
```

* Change .env
 
```
cp .env.example .env
```

* write these.
```.env
TWITTER_CLIENT_ID=
TWITTER_CLIENT_SECRET=
```

* change this.
```.env
APP_URL=https://{your application domain name}
```

* make Laravel auth command and migration

```
php artisan make:auth
php artisan migrate
```

## reference
*  [Laravel5.3でソーシャル連携ウェブサービスの土台を作る(Socialite/Twitter)](http://qiita.com/maimai-swap/items/c19e7eac59181091388d)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
