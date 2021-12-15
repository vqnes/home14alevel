<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalSpecies extends Enum
{
    private const HOMO_SAPIENS = 'Homo sapiens';

    public static function HOMO_SAPIENS(): self
    {
        return new self(self::HOMO_SAPIENS);
    }
}
