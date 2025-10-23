#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use function cli\line;
use function cli\prompt;
use function BrainGames\BrainPrimeLogic\primelogic;
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
print_r('Answer "yes" if given number is prime. Otherwise answer "no".' . "\n");
primelogic($name);