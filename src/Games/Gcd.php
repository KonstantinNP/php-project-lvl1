<?php

namespace Project\Games\Gcd;

use function Project\Engine\engineForGames;

function runGcdGame(): void
{
    $conditionOfTask = "Find the greatest common divisor of given numbers";
    $nameOfGameFunction = '\Project\Games\Gcd\getValuesForGcdGame';
    engineForGames($conditionOfTask, $nameOfGameFunction);
}
function getValuesForGcdGame(): array
{
    $maxNumber = 100;
    $firstRandomNumber = rand(1, $maxNumber);
    $secondRandomNumber = rand(1, $maxNumber);
    $minNumber = min($firstRandomNumber, $secondRandomNumber);
    $maxDivisor = 1;
    for ($i = 1; $i <= $minNumber; $i++) {
        if ($firstRandomNumber % $i === 0 && $secondRandomNumber % $i === 0) {
            $maxDivisor = $i;
        }
    }
    $question = "{$firstRandomNumber} {$secondRandomNumber}";
    $correctAnswer = $maxDivisor;
    return [$question, (string) $correctAnswer];
}
