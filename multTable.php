<?php
    echo "<table>"
    for ($i = 1; $i < 100; $i++)
    {
        echo "<tr>" . $i;
        for ($j = 1; $j < 100; $j++)
        {
            echo "<td>" . $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>"
?>
