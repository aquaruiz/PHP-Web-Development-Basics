<html>
<form method="GET">
    <div>
        Delimiter:
        <select name="delimiter">
            <option valie=",">,</option>
            <option valie="|">|</option>
            <option valie="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names"/></div>
    <div>
        Ages:
        <input type="text" name="ages"/></div>
    <div>
        <input type="submit" value="Filter!" name="filter"/>
    </div>
</form>
<?php
include "studentsStlip.php";
if (isset($names, $ages)) : ?>
    <table border="1" cellpadding="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($names); $i++): ?>
            <tr>
                <td><?= $names[$i]; ?></td>
                <td><?= $ages[$i]; ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>
</html>
