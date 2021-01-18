<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;
use function Php\Project\Lvl1\Games\Even\evenGame;
use function Php\Project\Lvl1\Games\Calc\calcGame;
use function Php\Project\Lvl1\Games\Gcd\gcdGame;
use function Php\Project\Lvl1\Games\Progression\progressGame;
use function Php\Project\Lvl1\Games\Prime\primeGame;

function engineForGames(string $game): bool
{
    $questionsCount = 3;
    $printTask = false;
    $correctAnswer = null;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 1; $i <= $questionsCount; $i++) {
        switch ($game) {
            case "even":
                if ($printTask === false) {
                    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
                    $printTask = true;
                }
                $correctAnswer = evenGame(50);
                break;
            case "calc":
                if ($printTask === false) {
                    line("What is the result of the expression?");
                    $printTask = true;
                }
                $correctAnswer = calcGame(10);
                break;
            case "gcd":
                if ($printTask === false) {
                    line("Find the greatest common divisor of given numbers");
                    $printTask = true;
                }
                $correctAnswer = gcdGame(100);
                break;
            case "progress":
                if ($printTask === false) {
                    line("What number is missing in the progression?");
                    $printTask = true;
                }
                $correctAnswer = progressGame(20);
                break;
            case "prime":
                if ($printTask === false) {
                    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
                    $printTask = true;
                }
                $correctAnswer = primeGame(100);
                break;
        }
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return false;
        }
    }
    line("Congratulations, %s!", $name);
    return true;
}
