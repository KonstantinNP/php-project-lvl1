<?php

namespace Project\Games\Progression;

use function cli\line;
use function Project\Engine\congratulations;
use function Project\Engine\greeting;
use function Project\Engine\engineForGames;

function progressGame()
{
    $name = greeting();
    line("What number is missing in the progression?");
    $progression = [];
    $maxNumber = 100;
    for ($i = 1; $i <= 3; $i++) {
        $progression[0] = rand(1, $maxNumber);
        $step = rand(1, 5);
        for ($j = 1; $j < 10; $j++) {
            $progression[$j] = $progression[$j - 1] + $step;
        }
        $indexMissedNumber = rand(1, 9);
        $correctAnswer = $progression[$indexMissedNumber];
        $progression[$indexMissedNumber] = '..';
        $question = implode(" ", $progression);
        $result = engineForGames($name, $question, (string) $correctAnswer);
        if ($result === false) {
            return;
        }
    }
    Congratulations($name);
}
