<?php

namespace Project\Games\Calc;

use function Project\Engine\engineForGames;

function runCalcGame(): void
{
    $conditionOfTask = 'What is the result of the expression?';
    $getValuesForCalcGame = function (): array {
        $maxNumber = 10;
        $question = '';
        $correctAnswer = '';
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
        return [$question, (string)$correctAnswer];
    };
    engineForGames($conditionOfTask, $getValuesForCalcGame);
}
