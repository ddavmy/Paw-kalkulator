<?php

require dirname(__FILE__).'/../config.php';

$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

if( $a == 0 ) {
	$messages [] = 'To nie jest funkcja kwadratowa!';
}

if( $a == "" ) {
	$messages [] = 'Nie podano a';
} elseif( !is_numeric($a) ) {
	$messages [] = 'Pierwsza wartość nie jest liczbą!';
}
if( $b == "" ) {
	$messages [] = 'Nie podano b';
} elseif( !is_numeric($b) ) {
	$messages [] = 'Druga wartość nie jest liczbą!';
}
if( $c == "" ) {
	$messages [] = 'Nie podano c';
} elseif( !is_numeric($c) ) {
	$messages [] = 'Trzecia wartość nie jest liczbą!';
}

if( empty($messages)) {
	$a = floatval($a);
	$b = floatval($b);
	$c = floatval($c);
	$math = pow($b,2)-4*$a*$c;
}

if( empty($messages) ) {
	if( $math == 0 ) {
		$pierwZero = -$b/(2*$a);
		if ($pierwZero == -0) { abs($pierwZero); }
		$result = "<br />x<sub>0</sub> = ".$pierwZero;
	}
	elseif( $math < 0 ) {
		$result = '<br>brak pierwiastków.';
	}else {
		$pierwPierwszy = round((-$b+sqrt($math))/(2*$a),2);
		$pierwDrugi = round((-$b-sqrt($math))/(2*$a),2);
		if ($pierwPierwszy == -0) { abs($pierwPierwszy); }
		if ($pierwDrugi == -0) { abs($pierwDrugi); }
		$result = "<br />x<sub>1</sub> = ".$pierwPierwszy."<br />x<sub>2</sub> = ".$pierwDrugi;
	}
}

include 'calc_view.php';