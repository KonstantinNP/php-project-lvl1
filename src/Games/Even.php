<?php

namespace Project\Games\Even;

use function cli\line;
use function Project\Engine\congratulations;
use function Project\Engine\greeting;
use function Project\Engine\engineForGames;

function evenGame(): void
{
    $name = greeting();
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $maxNumber = 100;
    for ($i = 1; $i <= 3; $i++) {
        $question = rand(1, $maxNumber); //генерация случайного числа
        $parity = $question % 2 === 0; // определение четности
        $correctAnswer = ($parity === true) ? 'yes' : 'no';
        $result = engineForGames($name, (string) $question, $correctAnswer);
        if ($result === false) {
            return;
        }
    }
    Congratulations($name);
}
