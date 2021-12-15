<?php

/**
 * @template T
 */
abstract class Enum
{
    protected string $name;

    /**
     * @var T
     */
    protected $value;

    protected function __construct($value)
    {
        $constants = (new ReflectionClass(static::class))->getConstants();
        $constName = array_search($value, $constants);
        if ($constName === false) {
            throw new Exception("Constant with value `$value` not found");
        }

        $this->name = $constName;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return T
     */
    public function getValue()
    {
        return $this->value;
    }
}
