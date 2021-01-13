<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;
use function Php\Project\Lvl1\Games\Even\evenGame;
use function Php\Project\Lvl1\Games\Calc\calcGame;
use function Php\Project\Lvl1\Games\Gcd\gcdGame;

function engineForGames($game)
{
    $questionsCount = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    switch ($game) {
        case "even":
            $maxNumber = 50;
            evenGame($name, $questionsCount, $maxNumber);
            break;
        case "calc":
            $maxNumber = 10;
            calcGame($name, $questionsCount, $maxNumber);
            break;
        case "gcd":
            $maxNumber = 100;
            gcdGame($name, $questionsCount, $maxNumber);
            break;
    }
}
