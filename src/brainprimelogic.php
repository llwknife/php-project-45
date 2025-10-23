<?php
namespace BrainGames\BrainPrimeLogic;
use function cli\line;
use function cli\prompt;

function primelogic($name){
    $win = false;
    do{
        for($i = 0; $i < 3; $i++){
        $n = rand(2,100);
        print_r("Question: " . $n ."\n");
        $answer = prompt("Your answer: ");
        if ($n < 2) {
            $right_answer = "no";
        }
        if ($n == 2) {
            $right_answer = "yes";
        }
        if ($n % 2 == 0) {
            $right_answer = "no";
        }
        $sqrtN = sqrt($n);
        for ($j = 3; $j <= $sqrtN; $j += 2) {
            if ($n % $j == 0) {
                $right_answer = "no";
            }
        }
        $right_answer = "yes";
        }
        if($answer == $right_answer){
            print_r("Correct\n");
            $win = true;
        }
        else{
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$right_answer}'.\n");
            print_r("Let's try again, {$name}!\n");
            $win = false;
            break;
        }
    
    }while( $win == false);
    print_r("Congratulations, {$name}!\n");

}
