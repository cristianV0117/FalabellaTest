<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
require_once __DIR__ . '/../vendor/autoload.php';
use Core\{Falabella, Output};
$response = new Falabella(new Output);
echo($response->__invoke());