<?php
namespace BrainGames\BrainGsdLogic;
use function cli\line;
use function cli\prompt;


function gsdlogic($name)
{
    
    $win = false;
    do{
        for($i = 0; $i <3; $i++){
            $intermediatenumber = 0;
            $firstnumber = rand(0,100);
            $first1 = $firstnumber;
            $secondnumber = rand(0,100);
            $second1 = $secondnumber;
            if($secondnumber == 0){
                $rightanswer = $firstnumber;
            }
            else{
                do{
                    $intermediatenumber = $firstnumber;
                    $firstnumber = $secondnumber;
                    $secondnumber = $intermediatenumber % $secondnumber;


                }while( $secondnumber !== 0);
                $rightanswer = $firstnumber;
            }
            print_r("Question: " . $first1 ." " . $second1 . "\n");
            $answer = prompt("Your answer: ");
            if($answer == $rightanswer){
                print_r("Correct!\n");
                $win = true;
            }
            else{
                print_r("'{$answer}' is wrong answer ;(. Correct answer was '$rightanswer'.\n");
                print_r("Let's try again, {$name}!\n");
                $win = false;
                break;
            }
        }
    }while($win == false);
    print_r("Congratulations, " . $name . "!\n");
}