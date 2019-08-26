<?php


namespace App\Service;


use App\Service\Converter\ConverterInterface;

class Conversion
{
    CONST SERVICE_TAG = Conversion::class;

    private $converters;

    public function __construct()
    {
        $this->converters = [];
    }

    public function addConverter(ConverterInterface $converter)
    {
        $this->converters[] = $converter;
        return $this->converters;
    }

    public function convert(array $data, $format)
    {
        foreach ($this->converters as $converter) {
            if ($converter->supports($format)) {
                return $converter->convert($data);
            }
        }

        throw new \RuntimeException('No supported Converters found in chain.');
    }
}
