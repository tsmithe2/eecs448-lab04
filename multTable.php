<?php
    echo "<table border = 1>";
    $counter = 0;
    for ($i = 0; $i < 101; $i++)
    {
	echo "<tr>";
	for ($j = 0; $j < 101; $j++)
	{
		if ($counter == 0)
		{
			echo "<td>" . $j . "</td>";
		}
		else
		{
			if ($j == 0)
			{
				echo "<td>" . (($j + 1) * $counter) . "</td>";
			}
			else
			{
				echo "<td>" . ($j * $counter) . "</td>";
			}
		}
	}
	$counter++;
	echo "</tr>";
    }
    echo "</table>"; 
?>
