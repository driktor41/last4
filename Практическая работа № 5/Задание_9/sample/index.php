<?php
require "person.php";

if (!array_key_exists("category", $person)) {
    $person["category"] = "Соответствие занимаемой должности";
}

echo $person["category"] . "<br><br>";

echo "<pre>";
var_dump($person);
echo "</pre>";
?>