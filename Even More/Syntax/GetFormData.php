<html>
    <form method="GET">
        Name: <input type="text" name="name" /> <br>
        Age: <input type="text" name="age" /><br>
        <input type="radio" name="sex" value="male" id="sex-m"/> <label for="sex-m">Male</label>
        <input type="radio" name="sex" value="female" id="sex-f"/> <label for="sex-f">Female</label><br>
        <input type="submit" />
    </form>
<?php
    if(isset($_GET) && !empty($_GET) && sizeof($_GET) === 3){
        $name = $_GET['name'];
        $age = intval($_GET['age']);
        $sex = $_GET['sex'];
        $output = "My name is $name. I am $age years old. I am a $sex.";
    }
?>
<p><?=$output?></p>
</html>

