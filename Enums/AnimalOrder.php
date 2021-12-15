<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalOrder extends Enum
{
    private const PRIMATES = 'Primates';

    public static function PRIMATES(): self
    {
        return new self(self::PRIMATES);
    }
}
