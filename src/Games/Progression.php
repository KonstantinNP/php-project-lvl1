<?php

namespace Project\Games\Progression;

use function Project\Engine\engineForGames;

function runProgressGame(): void
{
    $conditionOfTask = "What number is missing in the progression?";
    $nameOfGameFunction = '\Project\Games\Progression\getValuesForProgressGame';
    engineForGames($conditionOfTask, $nameOfGameFunction);
}

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

function getValuesForProgressGame(): array
{
    $progression = getProgression();
    $indexMissedNumber = rand(1, 9);
    $correctAnswer = $progression[$indexMissedNumber];
    $progression[$indexMissedNumber] = '..';
    $question = implode(" ", $progression);
    return [$question, (string) $correctAnswer];
}
