<?php
class Blackjack {
    //properties:
    public $score = 0;
    public $cards = array();
    public $sum = 0;
    //methods:
    /*function __construct($score = 0) {
        $this->score = $score;
    }*/
    function startGame() {
        $randCard1 = rand(1, 11);
        $randCard2 = rand(1, 11);
        array_push($this->cards, $randCard1, $randCard2);
        $sum = array_sum($this->cards);

        echo implode(" and ", $this->cards);
        echo "<br>your score is ".$sum;
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
        echo "dealers gonna deal";
    }

    function surrender() {
        echo "That's what I thought...";
    }


}







