
<form>
    Name: <input type="text" name="name"/><br>
    Phone Number: <input type="text" name="phone"/><br>
    Age: <input type="text" name="age"/><br>
    Address: <input type="text" name="address"/><br>

    <input type="submit" value="Submit"/>
</form>

<?php

    if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['phone']) && isset($_GET['address'])){
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        $phone = htmlspecialchars($_GET['phone']);
        $address = htmlspecialchars($_GET['address']);

        $word = "";
        $value = "";
        echo "<table border='2'>";

        for ($i=1; $i <= 4; $i++) { 
            switch ($i) {
                case "1":
                    $word = "Name"; 
                    $value = $name;   
                    break;
                case "2":
                    $word = "Phone number";   
                    $value = $phone;   
                    break;
                case "3":
                    $value = $age;   
                    $word = "Age";    
                    break;
                case "4":
                    $value = $address;   
                    $word = "Address";    
                    break;          
            }

            echo "<tr><td style='background-color: orange'>$word</td><td>$value</td></tr>";
        }

        echo "</table>";
    }