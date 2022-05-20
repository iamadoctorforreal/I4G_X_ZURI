<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My PHP Calculator</title>
</head>
<body>
<form action="myCalculator.php" method="post">

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
if (isset($_POST['submit']))  {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operator = $_POST['operator'];

	if($operator=="+")
		$ans = $num1 + $num2;

	else if($operator=="-")
		$ans = $num1 - $num2;

	else if($operator=="*")
		$ans = $num1 * $num2;

	else if($operator=="/")
		$ans = $num1 / $num2;

	else if($operator=="%")
		$ans = $num1 % $num2;

	echo  $ans; 

}

?>
</p>

</body>
</html>