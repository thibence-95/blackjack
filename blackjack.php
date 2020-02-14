<?php
class Blackjack {
    //properties:
    public $score = 0;

    //methods:
    function __construct($score = 0) {
        $this->score = $score;
    }

    function hit() {

        $randnum = rand(1, 11);
        $this->score += $randnum;
        echo "<br> $this->score";
    }
    function getScore() {
        return $this->score;
    }
    function stand() {
        echo "dealers be dealin'";
    }
    function surrender() {
        echo "That's what I thought...";
    }


}







