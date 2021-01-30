<?php

namespace Project\Games\Prime;

use function cli\line;
use function Project\Engine\congratulations;
use function Project\Engine\greeting;
use function Project\Engine\engineForGames;

function primeGame(): void
{
    $name = greeting();
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    $maxNumber = 100;
    for ($i = 1; $i <= 3; $i++) {
        $randomNumber = rand(1, $maxNumber);
        if ($randomNumber === 1) {
            $correctAnswer = 'no';
        } else {
            $correctAnswer = 'yes';
            for ($j = 2; $j <= floor($randomNumber / 2); $j++) {
                if ($randomNumber % $j === 0) {
                    $correctAnswer = 'no';
                    break;
                }
            }
        }
        $question = $randomNumber;
        $result = engineForGames($name, (string) $question, $correctAnswer);
        if ($result === false) {
            return;
        }
    }
    Congratulations($name);
}
