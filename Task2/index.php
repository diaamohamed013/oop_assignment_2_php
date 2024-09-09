<?php
require_once "Product.php";
require_once "Book.php";
require_once "BabyCar.php";

$book = new Book();
$book->name = "Journy Book";
$book->price = 10.99;
$book->description = "This book is about journies around thw world";
$book->uploadImage("image1");
$book->writer = "John Doe";
$book->supplier = "Mohamed";
$book->color = "red";
$book->calcPrice();
$book->addPublisher("diaa");
$book->addPublisher("saif");
$book->addPublisher("aktham");
$book->addPublisher("amr");

echo "Displaying Publishers";
echo "<pre>";
var_dump ($book->displayPublishers());
echo "</pre>";

echo "<hr>";

echo "Choose Publishers";
echo "<pre>";
var_dump($book->choosePublisher("diaa"));
echo "</pre>";

echo "<hr>";

echo "Choose Publishers";
echo "<pre>";
var_dump($book->choosePublisher("ahmed"));
echo "</pre>";

echo "<hr>";

echo "Display Total Price";
echo "<pre>";
echo $book->calcPrice();
echo "</pre>";

echo "<hr>";

echo "Display Book Info";
echo "<pre>";
var_dump($book);
echo "</pre>";
// ----------------------------------------------------------------------------
echo "<hr>";
$babyCar = new BabyCar();
$babyCar->name = "Car";
$babyCar->price = 5.99;
$babyCar->description = "This Car with a remote control";
$babyCar->uploadImage("image2");
$babyCar->age = 5;
$babyCar->weight = "55kg";
$babyCar->addMaterials("m1");
$babyCar->addMaterials("m2");
$babyCar->addMaterials("m3");

echo "Display Baby Car Info";
echo "<pre>";
var_dump($babyCar);
echo "</pre>";
echo "<hr>";

echo "Display Total Price";
echo "<pre>";
echo $babyCar->calcPrice();
echo "</pre>";