<?php

namespace Project\Games\Progression;

use function Project\Engine\engineForGames;

function getProgression(): array
{
    $progression = [];
    $firstNumberOfProgression = rand(1, 20);
    $stepOfProgression = rand(1, 5);
    for ($i = 0; $i < 10; $i++) {
        $progression[] = $firstNumberOfProgression + $stepOfProgression * $i;
    }
    return $progression;
}

function runProgressGame(): void
{
    $conditionOfTask = "What number is missing in the progression?";
    $getValuesForProgressGame = function (): array {
        $progression = getProgression();
        $indexMissedNumber = rand(1, 9);
        $correctAnswer = $progression[$indexMissedNumber];
        $progression[$indexMissedNumber] = '..';
        $question = implode(" ", $progression);
        return [$question, (string) $correctAnswer];
    };
    engineForGames($conditionOfTask, $getValuesForProgressGame);
}
