<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Calculator</h1>
	<form method="post">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1" required>
		<br>
		<label for="num2">Number 2:</label>
		<input type="number" name="num2" required>
		<br>
		<label for="operation">Operation:</label>
		<select name="operation" required>
			<option value="add">Add</option>
			<option value="subtract">Subtract</option>
			<option value="multiply">Multiply</option>
			<option value="divide">Divide</option>
		</select>
		<br>
		<input type="submit" value="Calculate">
	</form>
	<br>
	<?php
		if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operation = $_POST['operation'];

			if ($operation == 'add') {
				$result = $num1 + $num2;
				echo "<p>The result of $num1 + $num2 is $result</p>";
			} elseif ($operation == 'subtract') {
				$result = $num1 - $num2;
				echo "<p>The result of $num1 - $num2 is $result</p>";
			} elseif ($operation == 'multiply') {
				$result = $num1 * $num2;
				echo "<p>The result of $num1 * $num2 is $result</p>";
			} elseif ($operation == 'divide') {
				if ($num2 == 0) {
					echo "<p>Cannot divide by zero</p>";
				} else {
					$result = $num1 / $num2;
					echo "<p>The result of $num1 / $num2 is $result</p>";
				}
			}
		}
	?>
</body>
</html>
