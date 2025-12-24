<!DOCTYPE html>
<html>
    <?php
        $RowOpen = "<tr>";
        $RowClose = "</tr>";
        $CellOpen = "<td>";
        $CellClose = "</td>";
        $TableContainer = "";
        $length = 100;
        $firstCell = "<td class=\"col\">";
        
        echo "<tr class=\"firstRow\">" . "<td></td>";
        for ($i = 1; $i <= $length; $i++) 
        {
            echo "<td>$i</td>";
        }
        echo "</tr>";

        for($i = 1; $i<=$length; $i++)
        {
            $TableContainer .= $RowOpen;
            $TableContainer .= $firstCell . $i . $CellClose;
            
            for($j=1; $j<=$length; $j+=1)
            {
                $TableContainer .= $CellOpen . ($i*$j) . $CellClose;
            }

            $TableContainer .= $RowClose;
        }
        echo $TableContainer;
    ?>
</html>