<?php

namespace ctqsoftware\DigitalCep;

use ctqsoftware\DigitalCep\Search\WS\ViaCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
    private function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();
        return $get->get($zipCode);
    }
    private function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }
        return $data;
    }
}
