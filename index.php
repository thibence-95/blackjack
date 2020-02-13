<?php

declare(strict_types = 1);

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

/*$cards = array('2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, 'T' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11);
$types = array('C', 'H', 'D', 'S');*/

session_start();

//THIS IS A CLASS
class blackjack {
    //properties:
    public $score = 0;

    //methods:
    function hit() {
        $randnum = rand(1, 11);
        $this->score = ($_SESSION['hit']);
        $_SESSION['hit'] = $this->score += $randnum;
        echo $_SESSION['hit'];
        if ($_SESSION['hit'] > 21) {
            echo "you suck major balls at this";
        }
        return $_SESSION['hit'];
    }

    function stand() {

    }

    function surrender() {
        echo "That's what I thought...";
    }
}

if (isset($_POST['hit'])) {

}

require 'game.php';