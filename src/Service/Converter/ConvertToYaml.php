<?php


namespace App\Service\Converter;

use Symfony\Component\Yaml\Yaml;

class ConvertToYaml implements ConverterInterface
{
    use ConverterSupportsTrait;

    CONST FORMAT = "YAML";

    public function convert(array $data)
    {
        return Yaml::dump($data);
    }
}
