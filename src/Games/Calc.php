<?php

namespace Project\Games\Calc;

use function cli\line;
use function Project\Engine\greeting;
use function Project\Engine\engineForGames;
use function Project\Engine\congratulations;

function calcGame()
{
    $name = greeting();
    line("What is the result of the expression?");
    $maxNumber = 10;
    $question = '';
    $correctAnswer = '';
    for ($i = 1; $i <= 3; $i++) {
        $firstRandomNumber = rand(1, $maxNumber);
        $secondRandomNumber = rand(1, $maxNumber);
        $randomOperation = rand(0, 2); // 0 - сложение; 1 - вычитание; 2 - умножение
        if ($randomOperation === 0) {
            $question = "{$firstRandomNumber} + {$secondRandomNumber}";
            $correctAnswer = $firstRandomNumber + $secondRandomNumber;
        } elseif ($randomOperation === 1) {
            $question = "{$firstRandomNumber} - {$secondRandomNumber}";
            $correctAnswer = $firstRandomNumber - $secondRandomNumber;
        } elseif ($randomOperation === 2) {
            $question = "{$firstRandomNumber} * {$secondRandomNumber}";
            $correctAnswer = $firstRandomNumber * $secondRandomNumber;
        }
        $result = engineForGames($name, $question, (string) $correctAnswer);
        if ($result === false) {
            return;
        }
    }
    Congratulations($name);
}
