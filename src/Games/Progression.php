<?php

namespace Project\Games\Progression;

use function Project\Engine\implementUserInterface;

const GAME_TASK = "What number is missing in the progression?";
const PROGRESSION_LENGTH = 10;
const MAX_PROGRESSION_STEP = 5;
const MAX_FIRST_NUMBER = 20;

function getProgression($firstProgressionNumber, $progressionStep): array
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $firstProgressionNumber + $progressionStep * $i;
    }
    return $progression;
}

function runGame(): void
{
    $getQuestionAnswerPair = function (): array {
        $firstProgressionNumber = rand(1, MAX_FIRST_NUMBER);
        $progressionStep = rand(1, MAX_PROGRESSION_STEP);
        $progression = getProgression($firstProgressionNumber, $progressionStep);
        $missedNumberIndex = rand(1, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$missedNumberIndex];
        $progression[$missedNumberIndex] = '..';
        $question = implode(" ", $progression);
        return [$question, (string) $correctAnswer];
    };
    implementUserInterface(GAME_TASK, $getQuestionAnswerPair);
}
