<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
require_once __DIR__ . '/../vendor/autoload.php';
use Core\{Falabella, Output};

$response = new Falabella;
$output = new Output;

echo($output->json($response->__invoke()));