<?php

require "vendor/autoload.php";

use ctqsoftware\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('28941268');

print_r($resultado);