<html>
<form method="GET">
    Enter year: <input type="text" name="year"/>
    <input type="submit"/>
</form>
</html>

<?php
$months = array('Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$current_month = date('n');
$current_year = $_GET['year'];
$current_day = date('d');
$month = 0;
echo '<table class="calendar">';
echo "<th colspan='4' class='year'>$current_year</th>";

for ($row = 1; $row <= 3; $row++) {
    echo '<tr>';

    for ($column = 1; $column <= 4; $column++) {
        echo "<td class='month'>";
        $month++;
        $first_day_in_month = date('w', mktime(0, 0, 0, $month, 1, $current_year));
        $month_days = date('t', mktime(0, 0, 0, $month, 1, $current_year));

        if ($first_day_in_month == 0) {
            $first_day_in_month = 7;
        }

        echo '<table  style="width: 100%">';
        echo '<th colspan="7">' . $months[$month - 1] . '</th>';
        echo '<tr class="days"><td width="14%">Пон</td><td width="14%">Вт</td><td width="14%">Ср</td><td width="14%">Четв</td><td width="14%">Пет</td>';
        echo '<td class="sat" width="14%">Съб</td><td class="sun" width="14%">Нед</td></tr>';
        echo '<tr>';

        for ($i = 1; $i < $first_day_in_month; $i++) {
            echo '<td> </td>';
        }

        for ($day = 1; $day <= $month_days; $day++) {
            $pos = ($day + $first_day_in_month - 1) % 7;
            echo '<td>' . $day . '</td>';

            if ($pos == 0) {
                echo '</tr><tr>';
            }
        }

        echo '</tr>';
        echo '</table>';
        echo '</td>';
    }

    echo '</tr>';
}

echo '</table>';
?>