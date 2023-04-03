<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Logowawnie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/app/style.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <input type="text" name="login" value="<?php out($form['login']); ?>" id="aligned-name" placeholder="Username" />
        </div>
        <div class="pure-control-group">
            <input type="password" name="pass" id="aligned-password" placeholder="Password" />
        </div>
    </fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>

<?php
if (isset($messages)) {
	if (count($messages) > 0) {
		echo '<div id="msgFound">';
		foreach ($messages as $key => $msg) {
			echo $msg.'<br />';
		}
		echo '</div>';
		
	}
}
?>

</div>

</body>
</html>