#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use function cli\line;
use function cli\prompt;
use function BrainGames\BrainProgressionLogic\make_progression;
use function BrainGames\BrainProgressionLogic\progressionlogic;
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
print_r('Find the greatest common divisor of given numbers.' . "\n");
make_progression();
progressionlogic($name);