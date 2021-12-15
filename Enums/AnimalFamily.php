<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalFamily extends Enum
{
    private const HOMINOIDEA = 'Hominoidea';

    public static function HOMINOIDEA(): self
    {
        return new self(self::HOMINOIDEA);
    }
}
