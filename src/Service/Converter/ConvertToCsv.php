<?php


namespace App\Service\Converter;


class ConvertToCsv implements ConverterInterface
{
    use ConverterSupportsTrait;

    CONST FORMAT = "CSV";

    public function convert(array $data)
    {
        return $this->array_2_csv($data);
    }

    private function array_2_csv($array) {
        $csv = array();
        foreach ($array as $item=>$val) {
            if (is_array($val)) {
                $csv[] = $this->array_2_csv($val);
                $csv[] = "\n";
            } else {
                $csv[] = $val;
            }
        }
        return implode(';', $csv);
    }
}
