<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    return $name;
}

function engineForGames(string $name, string $question, string $correctAnswer): bool
{
    line("Question: %s", $question);
    $answer = prompt("Your answer");
    if ($answer === $correctAnswer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return false;
    }
    return true;
}

function congratulations(string $name): void
{
    line("Congratulations, %s!", $name);
}
