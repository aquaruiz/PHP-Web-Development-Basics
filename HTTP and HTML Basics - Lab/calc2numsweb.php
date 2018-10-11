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
        <input type="text" name="number_one"/>
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two"/>
    </div>

    <?php
    if(isset($_GET) && !empty($_GET) && sizeof($_GET) === 4){
        $operation = $_GET['operation'];
        $numberOne = $_GET['number_one'];
        $numberTwo = $_GET['number_two'];

        echo "<div>";
        echo "Result: ";
        if($operation == "sum"){
            echo "  <input type='text' disabled='disabled' readonly='readonly' value='" . ($numberOne + $numberTwo) . "' />";
        } else if($operation == "subtract"){
            echo "  <input type='text' disabled='disabled' readonly='readonly' value='" . ($numberOne - $numberTwo) . "' />";
        } else {
            echo "  <input type='text' disabled='disabled' readonly='readonly' value='Invalid operation supplied!' />";
        }

        echo "</div>";
    }
    ?>
    <div>
        <input type="submit" name="calculate" value="Calculate!"/>
    </div>
</form>
</html>
