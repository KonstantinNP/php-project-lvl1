<?php

namespace Php\Project\Lvl1\Games\Progression;

use function cli\line;

function progressGame(int $maxNumber): string
{
    $progression = [];
    $progression[0] = rand(1, $maxNumber);
    $step = rand(1, 5);
    for ($i = 1; $i < 10; $i++) {
        $progression[$i] = $progression[$i - 1] + $step;
    }
    $indexMissedNumber = rand(1, 9);
    $correctAnswer = (string) $progression[$indexMissedNumber];
    $progression[$indexMissedNumber] = '..';
    $question = implode(" ", $progression);
    line("Question: %s", $question);
    return $correctAnswer;
}
