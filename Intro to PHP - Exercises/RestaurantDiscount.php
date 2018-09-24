<?php
$countPeople = intval(readline());
$package = readline();
$discountPercent = 0;
$discountPrice = 0;
$hallName = "";
$hallPrice = 0;

if($countPeople <= 50){
    $hallPrice = 2500;
    $hallName = "Small Hall";
} else if($countPeople <=100){
    $hallPrice = 5000;
    $hallName = "Terrace";
} else if ($countPeople <= 120){
    $hallPrice = 7500;
    $hallName = "Great Hall";
} else {
    echo "We do not have an appropriate hall.";
    return;
}

switch ($package){
    case "Normal":
        $discountPercent = 0.05;
        $discountPrice = 500;
        break;
    case "Gold":
        $discountPercent = 0.1;
        $discountPrice = 750;
        break;
    case "Platinum":
        $discountPercent = 0.15;
        $discountPrice = 1000;
        break;
}

$totalPrice = ($hallPrice + $discountPrice) * (1 - $discountPercent);
$pricePerPerson = $totalPrice / $countPeople;
$pricePerPerson = number_format($pricePerPerson, 2);

echo "We can offer you the {$hallName}" . PHP_EOL . "The price per person is {$pricePerPerson}$";
?>