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

if (isset($_SESSION['playboi'])) {
    $playboi = new Blackjack($_SESSION['playboi']);
}
if (isset($_SESSION['playboi']) == 0) {

}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['hit'])) {
        $playboi->hit();
        $_SESSION['playboi'] = $playboi->getScore();
        if ($playboi->getScore() > 21) {
            echo "get flooped";
            session_destroy();
        }
    }
    if ($_POST['stand']) {
    	$playboi->stand();
    }
    if ($_POST['wuss']) {
    	$playboi->surrender();
    }
}
