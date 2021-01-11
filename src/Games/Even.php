<?php

namespace Php\Project\Lvl1\Games\Even;

use function cli\line;
use function cli\prompt;

function evenGame($name, $questionsCount, $maxNumber)
{
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    for ($i = 1; $i <= $questionsCount; $i++) {
        $question = rand(1, $maxNumber); //генерация случайного числа
        $parity = $question % 2 === 0; // определение четности
        $correctAnswer = ($parity === true) ? 'yes' : 'no';
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
