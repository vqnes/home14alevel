<?php

require_once 'Mammal.php';

abstract class Apes extends Mammal
{
    public function getOrder(): AnimalOrder
    {
        return AnimalOrder::PRIMATES();
    }

    public function getFamily(): AnimalFamily
    {
        return AnimalFamily::HOMINOIDEA();
    }
}
