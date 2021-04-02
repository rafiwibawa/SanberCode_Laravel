<?php
class Animal
{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public $legs = 4;
    public $cold_blooded = "no";
}