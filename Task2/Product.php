<?php
class Product {
    var $name;
    var $price;
    var $description;
    var $image;

    function uploadImage($src){
        return $this->image = $src;
    }

    function calcPrice(){
        return $this->price * 1.1;
    }
}