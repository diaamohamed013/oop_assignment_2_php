<?php
class Animal
{
    var $name;
    var $num_of_legs = 4;

    var $has_wings = false;


    function fly()
    {
        return $this->has_wings == true ? "I can fly" : "I can't fly" ;
    }
}
