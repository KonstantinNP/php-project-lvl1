<?php

namespace Project\Games\Gcd;

use function cli\line;
use function Project\Engine\congratulations;
use function Project\Engine\greeting;
use function Project\Engine\engineForGames;

function gcdGame(): void
{
    $name = greeting();
    line("Find the greatest common divisor of given numbers");
    $maxNumber = 100;
    for ($i = 1; $i <= 3; $i++) {
        $firstRandomNumber = rand(1, $maxNumber);
        $secondRandomNumber = rand(1, $maxNumber);
        $minNumber = min($firstRandomNumber, $secondRandomNumber);
        $maxNumber = max($firstRandomNumber, $secondRandomNumber);
        $maxDivisor = 1;
        if ($maxNumber % $minNumber === 0) {
            $maxDivisor = $minNumber;
        } else {
            for ($j = floor($minNumber / 2); $j >= 2; $j--) {
                if ($firstRandomNumber % $j === 0 && $secondRandomNumber % $j === 0) {
                    $maxDivisor = $j;
                    break;
                }
            }
        }
        $question = "{$firstRandomNumber} {$secondRandomNumber}";
        $correctAnswer = $maxDivisor;
        $result = engineForGames($name, $question, (string) $correctAnswer);
        if ($result === false) {
            return;
        }
    }
    Congratulations($name);
}
