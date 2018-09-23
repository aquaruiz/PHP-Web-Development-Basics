<html>
    <table border="2px solid red">
        <thead bgcolor="grey">
            <th><b>Even number</b></th>
            <th><b>Square root of number</b></th>
        </thead>
        <?php
        $sum = 0;
            for($i = 0; $i <= 100; $i++){
                if($i % 2 == 0){
                    $root = number_format(sqrt($i), 2);
                    echo "<tr><td align='center'>$i</td><td  align='center'>$root</td></tr>";
                    $sum += $root;
                }
            }
        ?>
        <tr>
            <td></td>
            <td align="right"><b><?=$sum?></b></td>
        </tr>
    </table>
</html>
<?php

?>