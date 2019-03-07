<!doctype html>
	<head>
		<meta charset = "utf-8">
		<title>Quiz.html</title>
	</head>
	<body>
		<form action = "quiz.php" method = "post">
			<fieldset>
				<legend>1.) What is Harry Potter's middle name?</legend>
				<p>
					<input type = "radio" name = "q1" value = "Lucious"/>Lucious
				</p>
				<p>
					<input type = "radio" name = "q1" value = "Patrick"/>Patrick

				</p>
				<p>
					<input type = "radio" name = "q1" value = "James"/>James

				</p>
				<p>
					<input type = "radio" name = "q1" value = "Bryan"/>Bryan

				</p>
			<?php
				$correctAmount = 0;
				if ($_POST["q1"] == "James")
				{
					echo "<p>Correct!</p>";
					echo "<p>You answered: " . $_POST["q1"] . "</p>";
					$correctAmount++;
				}
				else
				{
					echo "<p>Incorrect</p>";
					echo "<p>You answered: " . $_POST["q1"] . "</p>";
					echo "<p>The correct answer was: James</p>";
				}
			?>
			</fieldset>
			<fieldset>
				<legend>2.) What animal was Harry Potter's Patronus charm?</legend>
				<p>
					<input type = "radio" name = "q2" value = "A stag"/>A stag
				</p>
				<p>
					<input type = "radio" name = "q2" value = "A goat"/>A goat

				</p>
				<p>
					<input type = "radio" name = "q2" value = "A dog"/>A dog

				</p>
				<p>
					<input type = "radio" name = "q2" value = "A rabbit"/>A rabbit

				</p>
			<?php
				if ($_POST["q2"] == "A stag")
				{
					echo "<p>Correct!</p>";
					echo "<p>You answered: " . $_POST["q2"] . "</p>";
					$correctAmount++;
				}
				else
				{
					echo "<p>Incorrect</p>";
					echo "<p>You answered: " . $_POST["q2"] . "</p>";
					echo "<p> The correct answer was: A stag";
				}
			?>
			</fieldset>
			<fieldset>
				<legend>3.) What is the call of Harry Potter's wand</legend>
				<p>
					<input type = "radio" name = "q3" value = "Snake tounge"/>Snake tounge

				</p>
				<p>
					<input type = "radio" name = "q3" value = "Unicorn hair"/>Unicorn hair

				</p>
				<p>
					<input type = "radio" name = "q3" value = "Dragon heart string"/>Dragon heart string

				</p>
				<p>
					<input type = "radio" name = "q3" value = "Pheonix tail feather"/>Pheonix tail feather

				</p>
			<?php
				if ($_POST["q3"] == "Pheonix tail feather")
				{
					echo "<p>Correct!</p>";
					echo "<p>You answered: " . $_POST["q3"] . "</p>";
					$correctAmount++;
				}
				else
				{
					echo "<p>Incorrect</p>";
					echo "<p>You answered: " . $_POST["q3"] . "</p>";
					echo "<p>The correct answer was: Pheonix tail feather</p>";
				}
			?>
			</fieldset>
			<fieldset>
				<legend>4.) What is the name of Harry Potter's Owl?</legend>
				<p>
					<input type = "radio" name = "q4" value = "Arol"/>Arol

				</p>
				<p>
					<input type = "radio" name = "q4" value = "Headwig"/>Headwig

				</p>
				<p>
					<input type = "radio" name = "q4" value = "Felix"/>Felix

				</p>
				<p>
					<input type = "radio" name = "q4" value = "Belatrix"/>Belatrix

				</p>
			<?php
				if ($_POST["q4"] == "Headwig")
				{
					echo "<p>Correct!</p>";
					echo "<p>You answered: " . $_POST["q4"] . "</p>";
					$correctAmount++;
				}
				else
				{
					echo "<p>Incorrect</p>";
					echo "<p>You answered: " . $_POST["q4"] . "</p>";
					echo "<p>The correct answer was: Headwig</p>";
				}
			?>
			</fieldset>
			<fieldset>
				<legend>5.) In which movie did Harry Potter first use the lumos spell?</legend>
				<p>
					<input type = "radio" name = "q5" value = "The Deathly Hallows part 1"/>The Deathly Hallows part 1

				</p>
				<p>
					<input type = "radio" name = "q5" value = "The Chamber of Secrets"/>The Chamber of Secrets

				</p>
				<p>
					<input type = "radio" name = "q5" value = "The Prisoner of Azkaban"/>The Prisoner of Azkaban

				</p>
				<p>
					<input type = "radio" name = "q5" value = "The Order of the Pheonix"/>The Order of the Pheonix

				</p>
			<?php
				if ($_POST["q5"] == "The Prisoner of Azkaban")
				{
					echo "</p>Correct</p>";
					echo "<p>You answered: " . $_POST["q5"] . "</p>";
					$correctAmount++;
				}
				else
				{
					echo "<p>Incorrect</p>";
					echo "<p>You answered: " . $_POST["q5"] . "</p>";
					echo "<p>The correct answer was: The Prisoner of Azkaban</p>";
				}
			?>
			</fieldset>
			<?php
				echo "<p>You answered " . $correctAmount . " of 5 questions correctly.</p>";
				echo "<p>Your score: " . (($correctAmount/5) * 100) . "%</p>";
			?>
		</form>
	</body>
</html>
