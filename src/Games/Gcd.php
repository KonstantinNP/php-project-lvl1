<?php

namespace Project\Games\Gcd;

use function Project\Engine\engineForGames;

const CONDITION_OF_TASK = "Find the greatest common divisor of given numbers";
const MAX_NUMBER = 100;

function getGreatestDivisor(int $a, int $b): int
{
    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}

function runGame(): void
{
    $getValuesForGame = function (): array {
        $firstNumber = rand(1, MAX_NUMBER);
        $secondNumber = rand(1, MAX_NUMBER);
        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = getGreatestDivisor($firstNumber, $secondNumber);
        return [$question, (string) $correctAnswer];
    };
    engineForGames(CONDITION_OF_TASK, $getValuesForGame);
}
