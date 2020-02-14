<?php


declare(strict_types = 1);

require 'blackjack.php';

session_start();


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

$playboi = new blackjack;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['hit'])) {
        $playboi->hit();
    }
}






?>
