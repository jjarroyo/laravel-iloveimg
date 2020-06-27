<?php

namespace JJArroyo\IloveImgLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Iloveimg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iloveimg';
    }
}