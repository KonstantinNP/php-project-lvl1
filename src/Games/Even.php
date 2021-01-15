<?php

namespace Php\Project\Lvl1\Games\Even;

use function cli\line;

function evenGame($maxNumber): string
{
    $question = rand(1, $maxNumber); //генерация случайного числа
    $parity = $question % 2 === 0; // определение четности
    $correctAnswer = ($parity === true) ? 'yes' : 'no';
    line("Question: %s", $question);
    return $correctAnswer;
}
