<?php

$playboi = new blackjack;

/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['hit'])) {
		$playboi->hit();
	}
}*/

?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8" lang="eng">
	<title>b l a c c j a c c</title>
</head>


<body>
<header>
    <h1>b l a c c o j a c c o</h1>
</header>
<div>
    <p id="score">Your score:
	    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['hit'])) {
                $playboi->hit();
            }
        } ?>
    </p>
</div>
<div id="buttons">
	<form method="post">
		<button type="submit" name="hit">Hit me!</button>
		<button type="submit" name="stand">Stand</button>
		<button type="submit" name="wuss">Surrender</button>
	</form>
</div>

</body>
</html>
