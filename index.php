<?php

declare(strict_types=1);
//--sort-packages option keeps the package list sorted. Use this with the composer require command.

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\VarDumper\VarDumper;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/test.env');
$varDumper = new VarDumper();

$varDumper->dump($_ENV);
