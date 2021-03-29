<?php

namespace Project\Games\Gcd;

use function Project\Engine\implementUserInterface;

const GAME_TASK = "Find the greatest common divisor of given numbers";
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
    $getQuestionAnswerPair = function (): array {
        $firstNumber = rand(1, MAX_NUMBER);
        $secondNumber = rand(1, MAX_NUMBER);
        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = getGreatestDivisor($firstNumber, $secondNumber);
        return [$question, (string) $correctAnswer];
    };
    implementUserInterface(GAME_TASK, $getQuestionAnswerPair);
}
