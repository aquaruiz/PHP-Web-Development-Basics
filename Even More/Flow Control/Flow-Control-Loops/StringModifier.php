<html>
<form method="GET">
    <input type="text" name="input"/>
    <input type="radio" name="operation" value="palindrome" id="palindrome"/><label for="palindrome">Check
        Palindrome</label>
    <input type="radio" name="operation" value="reverse" id="reverse"/><label for="reverse">Reverse String</label>
    <input type="radio" name="operation" value="split" id="split"/><label for="split">Split</label>
    <input type="radio" name="operation" value="hash" id="hash"/><label for="hash">Hash String</label>
    <input type="radio" name="operation" value="shuffle" id="shuffle"/><label for="shuffle">Shuffle String</label>
    <input type="submit" value="Select"/>
</form>
<?php
function isPalindrome($input)
{
    $palindr = false;
    $reversedStr = strrev($input);

    if ($reversedStr === $input) {
        $palindr = true;
    }

    return $palindr;
}

if (isset($_GET) && !empty($_GET) && sizeof($_GET) === 2) {
    $input = $_GET['input'];
    $operation = $_GET['operation'];

    $output = "";
    switch ($operation) {
        case "palindrome":
            $output = isPalindrome($input) ? "True" : "False";
            break;
        case "reverse":
            $output = strrev($input);
            break;
        case "split":
            $output = preg_replace("/[^a-zA-Z]/", "", $input);
            break;
        case "hash":
            $output = crypt($input, "petys");
            break;
        case "shuffle":
            $output = str_shuffle($input);
            break;
    }
}
?>
<p border="1px solid red"><?=$output?></p>
</html>
