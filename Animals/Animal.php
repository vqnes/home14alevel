<?php

require_once 'Enums/AnimalGroup.php';
require_once 'Enums/AnimalOrder.php';
require_once 'Enums/AnimalFamily.php';
require_once 'Enums/AnimalSpecies.php';

abstract class Animal
{
    protected ?string $name;
    protected ?int $age;

    public function __construct(?string $name, ?string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    abstract public function getGroup(): AnimalGroup;

    abstract public function getOrder(): AnimalOrder;

    abstract public function getFamily(): AnimalFamily;

    abstract public function getSpecies(): AnimalSpecies;

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'Name'    => $this->getName(),
            'Age'     => $this->getAge(),
            'Group'   => $this->getGroup()->getValue(),
            'Order'   => $this->getOrder()->getValue(),
            'Family'  => $this->getFamily()->getValue(),
            'Species' => $this->getSpecies()->getValue(),
        ];
    }
}
