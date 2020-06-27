# Tinify Laravel 7+ Client
Tinify API support for Laravel 7+

## Install

``` bash
$ composer require jjarroyo/laravel-iloveimg
```

Add this to your config/app.php, 

under "providers":
```php
JJArroyo\IloveImgLaravel\LaravelIloveImgServiceProvider::class,
```
under "aliases":

```php
'IloveIMG' => JJArroyo\IloveImgLaravel\Facades\Iloveimg::class
```


And set a env variable `ILOVEIMG_APIKEY` with your iloveimg API key.


```php
ILOVEIMG_PROJECT_KEY=
ILOVEIMG_SECRET_KEY=
```


# laravel-iloveimg
