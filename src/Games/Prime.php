<?php

namespace Project\Games\Prime;

use function Project\Engine\engineForGames;

function isPrime(int $randomNumber): bool
{
    if ($randomNumber < 2) {
        return false;
    }
    for ($i = 2; $i <= $randomNumber / 2; $i++) {
        if ($randomNumber % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrimeGame(): void
{
    $conditionOfTask = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $getValuesForPrimeGame = function (): array {
        $maxNumber = 100;
        $randomNumber = rand(1, $maxNumber);
        $question = $randomNumber;
        $correctAnswer = (isPrime($randomNumber)) ? 'yes' : 'no';
        return [(string)$question, $correctAnswer];
    };
    engineForGames($conditionOfTask, $getValuesForPrimeGame);
}
