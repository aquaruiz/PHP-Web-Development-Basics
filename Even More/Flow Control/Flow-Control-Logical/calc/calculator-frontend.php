<html>
<form method="GET">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <?php
        include "calculator.php";
        ?>
        <input type="text" name="number_one" value="<?=$numberOne?>"/>
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two" value="<?=$numberTwo?>"/>
    </div>
    <div>
        <input type="submit" name="calculate" value="Calculate!"/>
    </div>
    <?php
    if(isset($output)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?=$output; ?>" />
        </div>
    <?php endif; ?>

</form>
</html>
