<?php

namespace Opqclick\CurrencyConverter\Facades;

use Illuminate\Support\Facades\Facade;

class CurrencyConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'currencyconverter';
    }
}
