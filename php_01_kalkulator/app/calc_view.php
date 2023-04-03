<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Kalkulator funkcji kwadratowej</title>
	<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/app/style.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!-- <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'> -->
</head>
<body>

<div id="container"></div>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/chroniona.php" class="pure-button">Chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<h1 id="header">Postać ogólna</h1>
<div class="menu">
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <input type="text" name="a" placeholder="Podaj a" autocomplete="off" value="<?php if(isset($a)) {print($a);}?>" />
    <input type="text" name="b" placeholder="Podaj b" autocomplete="off" value="<?php if(isset($b)) {print($b);}?>" />
    <input type="text" name="c" placeholder="Podaj c" autocomplete="off" value="<?php if(isset($c)) {print($c);}?>" />
    <input class="button" type="submit" value="Oblicz"/>
    <a href="<?php print(_APP_URL).'/app/calc.php';?>"> <input class="button" type="button" value="Reset"/></a>
</form>
</div>

<?php
	if (isset($messages)) {
		if (count ( $messages ) > 0) {
			echo '<div id="msgFound">';
			foreach ( $messages as $key => $msg ) {
			echo $msg."<br />";
			}
			echo '</div>';
		}
	}
?>

<?php if (isset($result)) { 
	echo '<div id="msg">Δ = '.$math.$result.'</div>';} ?>
</div>

</body>
</html>