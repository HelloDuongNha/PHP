<?php
if (!isset($_POST['val1'])) {
	include "templates/form.html.php";
} else {
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$calc = $_POST['calc'];
	$symbol = "";
	if (!is_numeric($val1) || !is_numeric($val2) ) {
		$error = "<h1 style= 'color:red;'> Invalid Entry, Try again BABY";
		include "templates/error.html.php";
	}
	switch ($calc) {
	case "add":$result = $val1 + $val2;
		$symbol = "+";
		break;
	case "sub":$result = $val1 - $val2;
		$symbol = "-";
		break;
	case "mul":$result = $val1 * $val2;
		$symbol = "x";
		break;
	case "div":
		if ($val2 == '0'){
			$error = "<h1 style= 'color:red;'> Can not devide to zero, BABY";
			include "templates/error.html.php";
			exit;
		}
		$result = $val1 / $val2;
		$symbol = "/";
		break;
	case "power": $result = $val1 ** $val2;
		$symbol = "^";
		break;
	}


	$output = "Calculation result: <br>" . $val1 . $symbol . $val2. "=" . $result;
	
	include "templates/result.php";
}
?>