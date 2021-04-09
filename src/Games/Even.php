<?php

namespace Project\Games\Even;

use function Project\Engine\play;

const GAME_TASK = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MAX_NUMBER = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getQuestionAnswerPair(): array
{
    $number = rand(1, MAX_NUMBER);
    $correctAnswer = isEven($number) ? 'yes' : 'no';
    return [(string) $number, $correctAnswer];
}

function runGame(): void
{
    play(GAME_TASK, fn() => getQuestionAnswerPair());
}
