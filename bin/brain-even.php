#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
#use function BrainGames\BrainEvenLogic\welcome;
#use function BrainGames\BrainEvenLogic\rule;
#use function BrainGames\BrainEvenLogic\makenumbers;
use function BrainGames\BrainEvenLogic\gamelogic;
use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
print_r('Answer "yes" if the number is even, otherwise answer "no".' . "\n");

gamelogic( $name);
