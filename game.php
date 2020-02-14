<?php
require "blackjack.php";

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

session_start();
//whatIsHappening();

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

$playboi = new Blackjack;
$dealboi = new Blackjack;
$score = $playboi->getScore();


if (isset($_SESSION['playboi'])) {
    $playboi = new Blackjack;
    $_SESSION['playboi'] = $playboi->score;
}
else {
    $_SESSION['playboi'] = 0;
    $playboi = new Blackjack;
    $_SESSION['playboi'] = $playboi->score;
}

if ((isset($_SESSION['score']))) {

}

if (isset($_SESSION['dealer'])) {
    $dealboi = new Blackjack($_SESSION['dealer']);
}
else {
    $_SESSION['dealer'] = 0;
    $dealboi = new Blackjack($_SESSION['dealer']);
}




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['start'])) {
        $playboi->startGame();
        $_SESSION['playboi'] = $playboi->score;

    }
    if (isset($_POST['hit'])) {

        $playboi->hit();
        $_SESSION['playboi'] = $playboi->getScore();
        if ($playboi->getScore() > 21) {
            echo "get flooped";
            session_destroy();
        } elseif ($playboi->getScore == 21) {
            echo "haters will say you cheated";
        }
    }
    if ($_POST['stand']) {
    	$playboi->stand();
    }
    if ($_POST['wuss']) {
    	$playboi->surrender();
    }
}
