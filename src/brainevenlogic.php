<?php
namespace BrainGames\BrainEvenLogic;
use function cli\line;
use function cli\prompt;
function welcome()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function rule()
{
    print_r('Answer "yes" if the number is even, otherwise answer "no".');
}



function gamelogic( $name)
{
    
    
    $win = false;
    do{
        $numbers = [];
        for( $i = 0; $i < 3; $i++){
        $number = rand(1, 100);
        $numbers[] = $number;   
        }
        for( $i = 0; $i < 3; $i++){
            print_r('Question: ' . $numbers[$i] . "\n" );
            if( $numbers[$i] % 2 == 0){
                $rightanswer = "yes";
            }
            else{
                $rightanswer = "no";
            }
            $answer = prompt("Your answer");
            if($answer ===$rightanswer){
                $win = true;
                print_r("Correct!\n");
            }
            else{
                $win = false;
                print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightanswer}'.\n");
                print_r("Let's try again, " . $name . "!\n" );
                break;
            }

        }
        
    }while ($win == false);
    print_r("Congratulations, " . $name . "!");
}
