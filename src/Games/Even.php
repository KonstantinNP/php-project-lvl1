<?php

namespace Project\Games\Even;

use function Project\Engine\implementUserInterface;

const GAME_TASK = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MAX_NUMBER = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGame(): void
{
    $getQuestionAnswerPair = function (): array {
        $number = rand(1, MAX_NUMBER);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
        return [(string) $number, $correctAnswer];
    };
    implementUserInterface(GAME_TASK, $getQuestionAnswerPair);
}
