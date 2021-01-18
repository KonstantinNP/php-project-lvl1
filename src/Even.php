<?php

namespace Php\Project\Lvl1\Even;

use function cli\line;
use function cli\prompt;

function checkEven(): bool
{


    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($i = 1; $i <= 3; $i++) {
        $randomNumber = rand(1, 50);
        $parity = $randomNumber % 2 === 0;
        $correctAnswer = ($parity === true) ? 'yes' : 'no';
        line("Question: %s", $randomNumber);
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return false;
        }
    }
    line("Congratulations, %s!", $name);
    return true;
}
