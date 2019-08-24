<?php


namespace App\Service\Converter;


interface ConverterInterface
{
    CONST SERVICE_TAG = 'tst.converter';

    public function convert(array $data);
    public function supports(string $format);
}
