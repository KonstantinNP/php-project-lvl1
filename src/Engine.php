<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function play(string $gameTask, callable $getQuestionAnswerPair): void
{
    line("Welcome to the Brain Game!");
    $name = prompt("May I have your name?", '', ' ');
    line("Hello, %s!", $name);
    line($gameTask);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $getQuestionAnswerPair();
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
