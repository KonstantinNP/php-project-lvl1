<?php

namespace Project\Games\Prime;

use function Project\Engine\engineForGames;

const CONDITION_OF_TASK = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
const MAX_NUMBER = 100;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame(): void
{
    $getValuesForGame = function (): array {
        $number = rand(1, MAX_NUMBER);
        $question = $number;
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        return [(string)$question, $correctAnswer];
    };
    engineForGames(CONDITION_OF_TASK, $getValuesForGame);
}
