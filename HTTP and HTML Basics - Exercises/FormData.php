<html>
    <form method="GET">
        <input type="text" name="name" /> <br>
        <input type="text" name="age" /><br>
        <input type="radio" name="gender" value="male" id="sex-m"/> <label for="sex-m">Male</label><br>
        <input type="radio" name="gender" value="female" id="sex-f"/> <label for="sex-f">Female</label><br>
        <input type="submit" />
    </form>
<?php
    if(isset($_GET) && !empty($_GET) && sizeof($_GET) === 3){
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars(intval($_GET['age']));
        $sex = htmlspecialchars($_GET['gender']);
        $output = "My name is $name. I am $age years old. I am $sex.";
        echo $output;
    }
?>
</html>

