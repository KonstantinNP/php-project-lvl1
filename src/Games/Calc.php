<?php

namespace Php\Project\Lvl1\Games\Calc;

use function cli\line;

function calcGame(int $maxNumber): string
{
    $firstRandomNumber = rand(1, $maxNumber);
    $secondRandomNumber = rand(1, $maxNumber);
    // Создание массива вопросов
    $questionForSum = "{$firstRandomNumber} + {$secondRandomNumber}";
    $questionForSubtract = "{$firstRandomNumber} - {$secondRandomNumber}";
    $questionForMultiplication = "{$firstRandomNumber} * {$secondRandomNumber}";
    $questions = [$questionForSum, $questionForSubtract, $questionForMultiplication];
    // Создание массива ответов
    $resultOfSum = $firstRandomNumber + $secondRandomNumber;
    $resultOfSubtract = $firstRandomNumber - $secondRandomNumber;
    $resultOfMultiplication = $firstRandomNumber * $secondRandomNumber;
    $operations = [$resultOfSum, $resultOfSubtract, $resultOfMultiplication];
    // Генерация случайной операции и определение соответсвущих ей вопроса и ответа
    $randomOperation = rand(0, 2);
    $question = $questions[$randomOperation];
    $correctAnswer = (string) $operations[$randomOperation];
    line("Question: %s", $question);
    return $correctAnswer;
}
