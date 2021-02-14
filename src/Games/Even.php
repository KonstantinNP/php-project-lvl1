<?php

namespace Project\Games\Even;

use function Project\Engine\engineForGames;

function runEvenGame(): void
{
    $conditionOfTask = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $getValuesForEvenGame = function (): array {
        $maxNumber = 100;
        $question = rand(1, $maxNumber); //генерация случайного числа
        $isEven = $question % 2 === 0; // определение четности
        $correctAnswer = ($isEven) ? 'yes' : 'no';
        return [(string) $question, $correctAnswer];
    };
    engineForGames($conditionOfTask, $getValuesForEvenGame);
}
