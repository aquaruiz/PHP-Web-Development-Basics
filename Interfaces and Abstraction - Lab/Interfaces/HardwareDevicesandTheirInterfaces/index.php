<?php
spl_autoload_register();

#One desktop computer
$d = new DesktopComputer("AMD", "8GB", true);
$d->move();

#two laptops
$l1 = new Laptop("ASUS", "2GB", 100);
$l1->pressKey();
$l2 = new Laptop("AsRock", "4GB", 50);
$l2->changeStatus();

#one tablet
$t = new Tablet("MTEL", false, 15, "600x800");
$t->writeText();

#three mobile phones
$m1 = new MobilePhone("MTEL", true, 99, "big");
$m1->moveFinger();
$m2 = new MobilePhone("Telenor", true, 5, "small");
$m2->moveFinger();
$m3 = new MobilePhone("BTK", false, 55, "medium");
$m3->clickFinger();
?>