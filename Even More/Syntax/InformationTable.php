<?php
//    $input = "Pesho
//0884-888-888
//67
//Suhata Reka";
    $input = "Gosho
0882-321-423
24
Hadji Dimitar";
    list($name, $phone, $age, $address) = explode(PHP_EOL, $input);
?>
<html>
    <table border="2 px solid black">
        <tr>
            <td bgcolor="magenta" width="150px"><b>Name:</b></td>
            <td align="right" width="150px"><?php echo $name?></td>
        </tr>
        <tr>
            <td bgcolor="orange"><b>Phone number:</b></td>
            <td align="right"><?php echo " ".$phone?></td>
        </tr>
        <tr>
            <td bgcolor="orange"><b>Age:</b></td>
            <td align="right"><?php echo $age?></td>
        </tr>
        <tr>
            <td bgcolor="orange"><b>Address:</b></td>
            <td align="right"><?php echo $address?></td>
        </tr>
    </table>
</html>
