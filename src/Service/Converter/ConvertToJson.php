<?php


namespace App\Service\Converter;


class ConvertToJson implements ConverterInterface
{
    use ConverterSupportsTrait;

    CONST FORMAT = "JSON";

    public function convert(array $data)
    {
        return json_encode($data);
    }
}
