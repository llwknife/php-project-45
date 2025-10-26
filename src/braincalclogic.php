<?php
namespace BrainGames\BrainCalcLogic;
use function cli\line;
use function cli\prompt;

function calclogic($name)
{
    $win = false;
    $operation = ["+", "-", "*"];
    do{
        for ($i = 0; $i < 3; $i++){
            $firstnumber = rand(0, 100);
            $secondnumber = rand(0, 100);
            $operation_number = rand(0,2);
            print_r('Question: ' . $firstnumber . $operation[$operation_number] . $secondnumber . "\n" );   
            $answer = prompt("Your answer: ");
            switch($operation_number){
                case 0:
                    $rightanswer = $firstnumber + $secondnumber;
                    break;
                case 1:
                    $rightanswer = $firstnumber - $secondnumber;
                    break;
                case 2:
                    $rightanswer = $firstnumber * $secondnumber;
                    break;
                default:
                    $rightanswer = 0;
            }
            if($answer == $rightanswer){
                print_r("Correct\n");
                $win = true;
                
            }
            else{
                print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightanswer}'.\n");
                print_r("Let's try again, {$name}!\n");
                $win = false;
                break;
            }
            

        }
    }while($win === false);
    print_r("Congratulations, " . $name . "!");
}
