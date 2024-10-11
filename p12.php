<?php

function getComputerChoice() {
    $choices = array('rock', 'paper', 'scissors');
    $randomIndex = rand(0, 2);
    return $choices[$randomIndex];
}


function determineWinner($userChoice, $computerChoice) {
    if ($userChoice == $computerChoice) {
        return "It's a tie!";
    } elseif (
        ($userChoice == 'rock' && $computerChoice == 'scissors') ||
        ($userChoice == 'paper' && $computerChoice == 'rock') ||
        ($userChoice == 'scissors' && $computerChoice == 'paper')
    ) {
        return 'You win!';
    } else {
        return 'Computer wins!';
    }
}

$userChoice = strtolower($_GET['$choice']);


if (!in_array($userChoice, array('rock', 'paper', 'scissors'))) {
    die('Invalid choice. Please choose rock, paper, or scissors.');
}

$computerChoice = getComputerChoice();


$result = determineWinner($userChoice, $computerChoice);

echo "You chose: $userChoice\n";
echo "Computer chose: $computerChoice\n";
echo "$result\n";



?>


