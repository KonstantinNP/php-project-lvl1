<?php

namespace Php\Project\Lvl1\Games\Gcd;

use function cli\line;
use function cli\prompt;

function gcdGame($name, $questionsCount, $maxNumber)
{
    line("Find the greatest common divisor of given numbers");
    for ($i = 1; $i <= $questionsCount; $i++) {
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
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
