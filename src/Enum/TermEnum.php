<?php

namespace App\Enum;

enum TermEnum
{
    public const TWELVE_MONTHS = '12 months';
    public const TWENTY_FOUR_MONTHS = '24 months';

    public static function toArray(): array
    {
        return [
            self::TWELVE_MONTHS => 12,
            self::TWENTY_FOUR_MONTHS => 24,
        ];
    }
}
