<?php
Route::get('/currency-convert', function(){
    echo 'Hello from the currency converter package! Your next route endpoint will be "/currency-convert/{amount}/{currency}"';
});

Route::get('/currency-convert/{amount}/{currency}',
    [\Opqclick\CurrencyConverter\CurrencyConverterController::class, 'convert']
)->where(['amount' => '[0-9]+', 'currency' => '[a-z]+']);


