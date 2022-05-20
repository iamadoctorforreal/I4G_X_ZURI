<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My PHP Calculator</title>
</head>
<body>
<form action="calculatorr.php" method="post">

	<input type="number" name="num1" placeholder="Number 1">
	<br/>
	<br/>
	<input type="number" name="num2" placeholder="Number 2">
	<br/>
	<br/>
	<select name="operator">
		
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">%</option>
	</select>
	<br/>
	<br/>
	<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:


<?php


function multiply($num1,$num2) {
	return $num1 * $num2;
}


function addition($num1,$num2) {
	return $num1 + $num2;
}


function divide($num1,$num2) {
	return $num1 / $num2;
}


function minus($num1,$num2) {
	return $num1 - $num2;
}


function modulus($num1,$num2) {
	return $num1 % $num2;
}





if (isset($_POST['submit']))  {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operator = $_POST['operator'];

	if($operator=="+")
		echo addition($num1,$num2);

	else if($operator=="-")
		echo minus($num1,$num2);

	else if($operator=="*")
		echo multiply($num1,$num2);

	else if($operator=="/")
		echo divide($num1,$num2);

	else if($operator=="%")
		echo modulus($num1,$num2);

}

?>
</p>

</body>
</html>