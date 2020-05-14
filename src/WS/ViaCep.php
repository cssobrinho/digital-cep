<?php

namespace ctqsoftware\DigitalCep\WS;

class ViaCep
{
    private $url = "https://viacep.com.br/ws";

    private function get(string $zipcode): array
    {
        $get = file_get_contents($this->url . $zipcode . "/json");

        return (array) json_decode($get);
    }
}
