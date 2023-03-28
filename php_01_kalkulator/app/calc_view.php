<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Kalkulator delty</title>
	<link rel="stylesheet" href="app/style.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <input type="text" name="a" placeholder="Podaj a" autocomplete="off" value="<?php if(isset($a)) {print($a);}?>" />
    <input type="text" name="b" placeholder="Podaj b" autocomplete="off" value="<?php if(isset($b)) {print($b);}?>" />
    <input type="text" name="c" placeholder="Podaj c" autocomplete="off" value="<?php if(isset($c)) {print($c);}?>" />
    <input id="button" value="Oblicz" type="submit"/>
</form>

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