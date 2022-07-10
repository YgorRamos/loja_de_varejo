<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateNumber(float $number): bool
    {
        return $number > 0;
    }
}
class ValidationProvider
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 3;
    }

    public static function validatePhone(string $phone): bool
    {
        return $phone < 9;
    }
    public static function validateCnpj(string $cnpj): bool
    {
        return $cnpj < 9;
    }
}
