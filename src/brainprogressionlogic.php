<?php
namespace BrainGames\BrainProgressionLogic;
use function cli\line;
use function cli\prompt;

function make_progression()
{
    $begin_of_progression = rand(0,100);
    $step_of_progression = rand(1,10);
    $progression[] = $begin_of_progression ;
    for ($i = 1; $i < 10; $i++) {
        $current_element = $begin_of_progression + $i * $step_of_progression;
        $progression[] = $current_element;
    }
    return $progression;
}
function progressionlogic($name)
{
    $win = false;
    do{
        for($i = 0 ; $i<3; $i++){
            $this_iteration_progression = make_progression();
            $hidden_number = rand(0,9);
            $right_answer = $this_iteration_progression[$hidden_number];
            $this_iteration_progression[$hidden_number] = "..";
            print_r("Question: " . implode(" " , $this_iteration_progression). "\n");
            $answer = prompt("Your answer: ");
            if( $answer == $right_answer){
                print_r("Correct\n");
                $win = true;
            }
            else{
                print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$right_answer}'.\n");
                print_r("Let's try again, {$name}!\n");
                $win = false;
                break;
            }
        }
    }while($win == false);
    print_r("Congratulations, {$name}!\n");
}