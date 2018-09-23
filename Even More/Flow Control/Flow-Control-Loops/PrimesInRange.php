<html>
Display all prime numbers:
<form method="GET">
    Enter start number: <input type="text" name="start" />
    Enter end number: <input type="text" name="end" />

    <input type="submit" value="brymmm"/>
</form>
<?php
function isPrime($num){
    $prime = true;

    for($i = 2; $i < sqrt($num); $i++){
        if($num % $i == 0){
            $prime = false;
            break;
        }
    }

    return $prime;
}

if(isset($_GET) && !empty($_GET) && sizeof($_GET) === 2) {
    $startNum = $_GET["start"];
    $endNum = $_GET["end"];

    $html = "<p>";
    for($i = $startNum; $i < $endNum; $i++){
        if(isPrime($i) == true){
            $html .= "<b>$i</b>, ";
        } else {
            $html .= $i . ", ";
        }
    }

    if(isPrime($endNum) == true){
        $html .= "<b>$endNum</b>";
    } else {
        $html .= $endNum;
    }

    $html .= "</p><b>END</b>";

    echo $html;

}

?>
</html>

