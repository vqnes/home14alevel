<?php

require_once 'Animal.php';

abstract class Mammal extends Animal
{
    public function getGroup(): AnimalGroup
    {
        return AnimalGroup::MAMMAL();
    }
}
