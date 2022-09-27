<?php

use Illuminate\Support\Facades\Route;
use Opqclick\CurrencyConverter\Converter;

Route::get('/currency-convert/{amount}/{currency}', function(Converter $converter, $amount, $currency) {
    return $converter->convert($amount, $currency);
})->where(['amount' => '[0-9]+', 'currency' => '[a-z]+']);

