<?php

namespace Project\Games\Progression;

use function Project\Engine\engineForGames;

const CONDITION_OF_TASK = "What number is missing in the progression?";
const PROGRESSION_LENGTH = 10;
const MAX_PROGRESSION_STEP = 5;
const MAX_FIRST_NUMBER = 20;

function getProgression(): array
{
    $progression = [];
    $firstNumberOfProgression = rand(1, MAX_FIRST_NUMBER);
    $stepOfProgression = rand(1, MAX_PROGRESSION_STEP);
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $firstNumberOfProgression + $stepOfProgression * $i;
    }
    return $progression;
}

function runGame(): void
{
    $getValuesForGame = function (): array {
        $progression = getProgression();
        $indexMissedNumber = rand(1, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$indexMissedNumber];
        $progression[$indexMissedNumber] = '..';
        $question = implode(" ", $progression);
        return [$question, (string) $correctAnswer];
    };
    engineForGames(CONDITION_OF_TASK, $getValuesForGame);
}
