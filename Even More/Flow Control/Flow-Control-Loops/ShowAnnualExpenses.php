<html>
<form method="GET">
    Enter number of years: <input type="text" name="input" />
    <input type="submit" value="Calc it!"/>
</form>
<?php
if(isset($_GET) && !empty($_GET)){
    $years = $_GET['input'];
}
?>
<table border="1">
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>Octomber</th>
        <th>November</th>
        <th>December</th>
        <th>Total</th>
    </tr>
    <?php
    $currentYear = 2018;
    $html = "";
    for($i = $years - 1; $i >= 0; $i--){
        $displayYear = $currentYear - $i;
        $html .= "<tr><td>$displayYear</td>";

        $sum = 0;
        for($j = 0; $j < 12; $j++){
            $expence = rand(0, 999);
            $sum += $expence;
            $html .= "<td align='right'>$expence</td>";
        }

        $html .= "<td align='right'>$sum</td>";

        $html .= "</tr>";
    }

    echo $html;
    ?>
</table>
</html>


