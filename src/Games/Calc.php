<?php

namespace Project\Games\Calc;

use function Project\Engine\implementUserInterface;

const GAME_TASK = "What is the result of the expression?";
const MAX_NUMBER = 10;

function getCalcResult(int $firstNumber, int $secondNumber): array
{
    $correctAnswer = '';
    $operations = ['+', '-', '*'];
    $operator = $operations[array_rand($operations)];
    switch ($operator) {
        case "+":
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case "-":
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case "*":
            $correctAnswer = $firstNumber * $secondNumber;
            break;
        default:
            print_r("Unknown operation symbol {$operator}");
    }
    return [$operator, $correctAnswer];
}

function runGame(): void
{
    $getQuestionAnswerPair = function (): array {
        $firstNumber = rand(1, MAX_NUMBER);
        $secondNumber = rand(1, MAX_NUMBER);
        [$operator, $correctAnswer] = getCalcResult($firstNumber, $secondNumber);
        $question = "{$firstNumber} {$operator} {$secondNumber}";
        return [$question, (string) $correctAnswer];
    };
    implementUserInterface(GAME_TASK, $getQuestionAnswerPair);
}
