<?php
class BabyCar extends Product
{
    var $materials = [];
    var $age;
    var $weight;

    function addMaterials($material)
    {
        if (!in_array($material, $this->materials)) {
            $this->materials[] = $material;
            return "Material added: " . $material;
        } else {
            return "Material already exists.";
        }
    }

}
