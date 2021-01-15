<?php

namespace Php\Project\Lvl1\Games\Gcd;

use function cli\line;

function gcdGame($maxNumber): string
{
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
            }
        }
    }
    $correctAnswer = (string) $maxDivisor;
    line("Question: %s %s", $firstRandomNumber, $secondRandomNumber);
    return $correctAnswer;
}
