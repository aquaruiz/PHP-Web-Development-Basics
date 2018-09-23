<html>
<form method="GET">
    Enter cars: <input type="text" name="input" />
    <input type="submit" value="brymmm"/>
</form>
</html>
<?php
if(isset($_GET) && !empty($_GET)){
    $colors = ["red", "green", "blue", "black", "yellow", "white", "pink", "purple", "orange"];
    $cars = explode(", ", $_GET['input']);
    $html = "
    <table style='border: 2px solid red'>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
    ";

    foreach ($cars as $car) {
        $count = rand(1, 5);
        $color = array_rand($colors);
        $html .= "<tr>
                    <td>$car</td>
                    <td>$colors[$color]</td>
                    <td>$count</td>
                  </tr>";
    }
    $html .= "</table>";
    echo $html;
}
?>