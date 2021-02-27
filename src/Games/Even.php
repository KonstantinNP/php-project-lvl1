<?php

namespace Project\Games\Even;

use function Project\Engine\engineForGames;

const CONDITION_OF_TASK = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MAX_NUMBER = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGame(): void
{
    $getValuesForGame = function (): array {
        $number = rand(1, MAX_NUMBER);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
        return [(string) $number, $correctAnswer];
    };
    engineForGames(CONDITION_OF_TASK, $getValuesForGame);
}
