<?php

namespace Php\Project\Lvl1\Games\Calc;

use function cli\line;
use function cli\prompt;

function calcGame($name, $questionsCount, $maxNumber)
{
    line("What is the result of the expression?");
    for ($i = 1; $i <= $questionsCount; $i++) {
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
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
