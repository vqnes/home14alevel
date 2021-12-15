<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalGroup extends Enum
{
    private const MAMMAL = 'Mammal';

    public static function MAMMAL(): self
    {
        return new self(self::MAMMAL);
    }
}
