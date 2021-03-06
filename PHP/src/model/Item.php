<?php

namespace Codekata2\model;

/**
 * Do not change this class for this exercise
 */
class Item
{
    public $name;

    public $sellIn;

    public $quality;

    function __construct($name, $sellIn, $quality) {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }
}
