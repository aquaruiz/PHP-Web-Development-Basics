<html>
<form method="get">
    Enter your numbers comma separated here: <input type="text" name="nums" />
    <input type="submit" value="Enter"/>
    <p>We will split them below and do some maths.</p>
</form>
<?php
    if(isset($_GET) && !empty($_GET)){
        $input = preg_split("/[, ]/", $_GET['nums']);
        $input = array_values(array_filter($input, "strlen"));
        var_dump($input);
        $input = array_map("floatval", $input);

        $html = "<table border='1'><tr><th>Number</th><th>Digits Sum</th></tr>";
        for($i = 0; $i < count($input); $i++){
            $num = $input[$i];
            $html .= "<tr><td>$num</td>";
            if($num * 10 % 10 != 0){
                $html .= "<td>I cannot sum that</td>";
            } else {
                $numSum = 0;

                for($j = 0; $j < strlen($num); $j++){
                    $numSum += $num % 10;
                    $num = $num / 10;
                }

                $html .= "<td>$numSum</td>";
            }

            $html .= "</tr>";
        }

        $html .= "</table>";

        echo $html;
    }
?>
</html>


