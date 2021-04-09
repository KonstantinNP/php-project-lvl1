<?php

namespace Project\Games\Gcd;

use function Project\Engine\play;

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

function getQuestionAnswerPair(): array
{
    $firstNumber = rand(1, MAX_NUMBER);
    $secondNumber = rand(1, MAX_NUMBER);
    $question = "{$firstNumber} {$secondNumber}";
    $correctAnswer = getGreatestDivisor($firstNumber, $secondNumber);
    return [$question, (string) $correctAnswer];
}

function runGame(): void
{
    play(GAME_TASK, fn() => getQuestionAnswerPair());
}
