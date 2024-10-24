<?php

declare(strict_types=1);
//--sort-packages option keeps the package list sorted. Use this with the composer require command.

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/test.env');

echo '<pre>';
var_dump($_ENV);
echo '</pre>';
