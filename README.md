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


And set a env variable `TINIFY_APIKEY` with your TinyPNG API key.

If you want to directly upload the image to `aws s3`, you need set the env variables of following with your aws s3 credentials.

```php
ILOVEIMG_PROJECT_KEY=
ILOVEIMG_SECRET_KEY=
```


# laravel-iloveimg
