<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;

function engineForGames(string $conditionOfTask, string $nameOfGameFunction): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    line("%s", $conditionOfTask);
    for ($i = 1; $i <= 3; $i++) {
        $questionAnswerPair = $nameOfGameFunction();
        line("Question: %s", $questionAnswerPair[0]);
        $answer = prompt("Your answer");
        if ($answer === $questionAnswerPair[1]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $questionAnswerPair[1]);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
