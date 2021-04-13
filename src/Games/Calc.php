<?php

namespace Project\Games\Calc;

use function Project\Engine\play;

const GAME_TASK = "What is the result of the expression?";
const MAX_NUMBER = 10;

function getCalcOperator(): string
{
    $operators = ['+', '-', '*'];
    return $operators[array_rand($operators)];
}

function getCalcResult(int $firstNumber, int $secondNumber, string $operator): array
{
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
            throw new \Exception("Unknown operation symbol: $operator");
    }
    return [$operator, $correctAnswer];
}

function getQuestionAnswerPair(): array
{
    $firstNumber = rand(1, MAX_NUMBER);
    $secondNumber = rand(1, MAX_NUMBER);
    [$operator, $correctAnswer] = getCalcResult($firstNumber, $secondNumber, getCalcOperator());
    $question = "$firstNumber $operator $secondNumber";
    return [$question, (string) $correctAnswer];
}

function runGame(): void
{
    play(GAME_TASK, fn() => getQuestionAnswerPair());
}
