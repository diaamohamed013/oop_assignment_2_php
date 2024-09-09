<?php 
class Dog extends Animal {
    var $type;
    var $has_wings = false;
    function getType($type){
        return $this->type = $type;
    }

}