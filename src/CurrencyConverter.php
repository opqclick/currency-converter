<?php

namespace Opqclick\CurrencyConverter;

use GuzzleHttp\Client;

class CurrencyConverter
{
    public function convert(int $amount, string $currency)
    {
        $request_url = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

        $client = new Client();
        $response = $client->request('GET', $request_url, [
            'headers' => ['Accept' => 'application/xml']
        ])->getBody()->getContents();

        return response()->json($this->xml2array($response, $amount, $currency))->getContent();
    }

    public function xml2array($xml, $amount, $currency){
        $array =  json_decode(json_encode((array)simplexml_load_string($xml)),true);

        $array = $array['Cube']['Cube'];

        $new_array['base_amount'] = $amount;
        $new_array['base_currency'] = $currency;
        $new_array['date'] = $array['@attributes']['time'];
        foreach ($array['Cube'] as $row){
            $new_array['rates'][] = $row['@attributes'];
        }

        return $new_array;
    }
}
