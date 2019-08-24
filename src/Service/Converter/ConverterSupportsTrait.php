<?php


namespace App\Service\Converter;


trait ConverterSupportsTrait
{
    public function supports(string $format) : bool
    {
        return $format === self::FORMAT;
    }
}
