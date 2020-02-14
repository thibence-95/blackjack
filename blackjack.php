<?php

class blackjack {
    //properties:
    public $score = 0;

    //methods:
    function hit() {
        $randnum = rand(1, 11); //GENERATE ANY RANDOM NUMBER BETWEEN 1 & 11
        $this->score = ($_SESSION['score']);
        $_SESSION['score'] = $this->score += $randnum;
        echo $_SESSION['score'];
        if ($_SESSION['score'] > 21) {
            echo "your luck sucks at this";
        }
        return $_SESSION['score'];
    }

    function stand() {
        echo "dealers be dealin'";
    }


    function surrender() {
        echo "That's what I thought...";
    }
}



