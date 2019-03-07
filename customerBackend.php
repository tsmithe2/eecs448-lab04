<!doctype html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Web Store</title>
		<link rel = "stylesheet" href = "styles.css">
	</head>
	<body>
		<div id = pcontainer>
		<?php
		$email = $_POST["email"];
		$psswd = $_POST["psswd"];
		$ship = $_POST["shipping"];
		$totalCost = 0;
		echo "<p id = user_>Welcome " . $email . "!</p>";
		echo "<p id = user_psswd>Your password: " . $psswd . "</p>";

		echo "<table border = 1 id = receipt>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Quantity</td>";
		echo "<td>Cost Per Item</td>";
		echo "<td>Sub Total</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Harry Potter's Wand</td>";
		if ($_POST["harry"] == "Harry Potter's wand")
		{
			echo "<td>1</td> <td>$50.00</td> <td>$50.00</td>";
			$totalCost += 50;
		}
		else
		{
			echo "<td>0</td>";
			echo "<td>$50.00</td>";
			echo "<td>$0.00</td>";
		}
		echo "</tr>";

		echo "<tr>";
		echo "<td>Hermione's wand</td>";
		echo "<td>";
		if ($_POST["hermione"] == "Hermione's wand")
		{
			echo "1</td> <td>$45.00</td> <td>$45.00</td>";
			$totalCost += 45;
		}
		else
		{
			echo "0</td> <td>$45.00</td> <td>$0.00</td>";
		}
		echo "</tr>";

		echo "<tr>";
		echo "<td>Ron's wand</td>";
		if ($_POST["ron"] == "Ron's wand")
		{
			echo "<td>1</td> <td>$40.00</td> <td>$40.00</td>";
			$totalCost += 40;
		}
		else
		{
			echo "<td>0</td> <td>$40.00</td> <td>$0.00</td>";
		}
		echo "</tr>";

		echo "<tr>";
		echo "<td>Shipping</td>";
		if ($ship == "7 day free shipping")
		{
			echo "<td colspan = 2>7 day free shipping</td> <td>$0.00</td>";
		}
		else if ($ship == "$5.00 three day shipping")
		{
			echo "<td colspan = 2>3 day shipping</td> <td>$5.00</td>";
			$totalCost += 5;
		}
		else if ($ship == "$50.00 overnight shipping")
		{
			echo "<td colspan = 2>overnight shipping</td> <td>$50.00</td>";
			$totalCost += 50;
		}
		echo "</tr>";

		echo "<tr>";
		echo "<td colspan = 3>Total Cost</td>";
		echo "<td>$" . $totalCost . "</td>";
		echo "</tr>";
		echo "</table>";
		?>
	</div>
	</body>
</html>
