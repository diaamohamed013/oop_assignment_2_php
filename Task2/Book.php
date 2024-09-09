<?php
class Book extends Product
{
    var $publishers = [];
    var $writer;
    var $color;
    var $supplier;

    function addPublisher($publisher)
    {
        if (!in_array($publisher, $this->publishers)) {
            $this->publishers[] = $publisher;
            return "Publisher added: " . $publisher;
        } else {
            return "Publisher already exists.";
        }
    }

    function choosePublisher($publisher)
    {
        if (in_array($publisher, $this->publishers)) {
            return "Publisher chosen: " . $publisher;
        } else {
            return "Publisher not found.";
        }
    }

    function displayPublishers(){
        return $this->publishers;
    }
}
