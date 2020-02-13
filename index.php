<?php

declare(strict_types = 1);

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

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
        $this->score = $this->score += $randnum;
        
    }

    function stand() {

    }

    function surrender() {

    }
}


require 'game.php';