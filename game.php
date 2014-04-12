<?php
    $board = array();

    echo '<table id="board">';
    for ($i = 0; $i < 100; $i++)
    {
        echo '<tr>';
        for ($j = 0; $j < 150; $j++)
        {
            echo "<td><div class='case'>$j</div></td>";
        }
        echo "</tr>";
    }
    echo '</table>';
?>