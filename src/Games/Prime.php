<?php

namespace Project\Games\Prime;

use function Project\Engine\play;

const GAME_TASK = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
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

function getQuestionAnswerPair(): array
{
    $number = rand(1, MAX_NUMBER);
    $question = $number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';
    return [(string) $question, $correctAnswer];
}

function runGame(): void
{
    play(GAME_TASK, fn() => getQuestionAnswerPair());
}
