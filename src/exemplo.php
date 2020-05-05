<?php

require "vendor/autoload.php";

use ctqsoftware\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001-000');

print_r($resultado);