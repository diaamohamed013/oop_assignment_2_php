<?php
require_once "Animal.php";
require_once "Dog.php";
require_once "Bird.php";

$dog = new Dog();
$dog->name = "Max";
$dog->getType("hasky");

echo "<pre>";
var_dump($dog);
echo "</pre>";

$bird = new Bird();
$bird->name = "Pilly";

echo "<pre>";
var_dump($bird);
echo "</pre>";