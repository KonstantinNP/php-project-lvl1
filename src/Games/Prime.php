<?php

namespace Php\Project\Lvl1\Games\Prime;

use function cli\line;

function primeGame($maxNumber): string
{
    $primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71];
    $randomNumbers = [];
    for ($i = 0; $i < 20; $i++) {
        $randomNumbers[] = rand(1, $maxNumber);
    }
    $allNumbers = array_merge($primeNumbers, $randomNumbers);
    $length = count($allNumbers);
    $question = $allNumbers[rand(0, $length - 1)];
    $correctAnswer = (in_array($question, $primeNumbers)) ? 'yes' : 'no';
    line("Question: %s", $question);
    return $correctAnswer;
}
