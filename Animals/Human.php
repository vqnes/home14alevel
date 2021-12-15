<?php

require_once 'Apes.php';

class Human extends Apes
{
    public function getSpecies(): AnimalSpecies
    {
        return AnimalSpecies::HOMO_SAPIENS();
    }
}
