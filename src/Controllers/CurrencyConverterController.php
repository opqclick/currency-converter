<?php

namespace Opqclick\CurrencyConverter\Controllers;

use App\Http\Controllers\Controller;
use Opqclick\CurrencyConverter\Converter;

class CurrencyConverterController extends Controller
{
    public function __invoke(Converter $converter) {
        $result = $converter->$converter();

        return $result;
    }

}
