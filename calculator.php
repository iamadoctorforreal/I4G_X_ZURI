/*/*/*





<?php

/*function multiply($a,$b) {
	return $a * $b;
}

echo multiply(5,2);



function addition($a,$b) {
	return $a + $b;
}

echo addition(5,2);

function divide($a,$b) {
	return $a / $b;
}

echo divide(8,2);

function minus($a,$b) {
	return $a - $b;
}

echo minus(8,2);


function modulus($a,$b) {
	return $a % $b;
}

echo modulus(8,3);

?>


<form action="calculator.php" method="GET">
<input type="number" name="number1">
<?php  echo "<br/>"; ?>
<?php  echo "<br/>"; ?>
<select>
	<option>+</option>
	<option>-</option>
	<option>*</option>
	<option>/</option>
	<option>%</option>
</select>
<?php  echo "<br/>"; ?>
<?php  echo "<br/>"; ?>
<input type="number" name="number2">
<?php  echo "<br/>"; ?>
<?php  echo "<br/>"; ?>
<button type="submit" name="submit">=</button>
<?php  echo "<br/>"; ?>
<?php  echo "<br/>"; ?>
<input type="number" name="result" readonly="" placeholder="Result">

</form> */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My PHP Calculator</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

	<input type="text" name="num1" placeholder="Number 1">
	<br/>
	<br/>
	<input type="text" name="num2" placeholder="Number 2">
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

<?php
	/* switch ($operator) {
		case None:
		echo "You need to select a method";
		break;
		case Add:
		echo $result1 + $result2;
		break;
		case Subtract:
		echo $result1 - $result2;
		break;
		case Multiply:
		echo $result1 * $result2;
		break;
		case Divide:
		echo $result1 / $result2;
		break;
		case Modulus:
		echo $result1 % $result2;
		break; 
	}*/

?>

</body>
</html>