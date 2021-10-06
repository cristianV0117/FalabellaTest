<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
namespace Core;

final class Falabella
{
    use Values;

    /**
     * @return array
     */
    public function __invoke(): array
    {
        $response = [];
        for ($index = 0; $index <= 100; $index++) {
            array_push($response, $this->getMultipleNumberValue([
                3,
                5
            ], $index));
        }
        return $response;
    }

    /**
     * @param array $multiples
     * @param int $index
     * @return string|int
     */
    private function getMultipleNumberValue(array $multiples, int $index)
    {
        for ($i=0; $i < count($multiples); $i++) { 
            if ($index % $multiples[$i] == 0) {
                return self::values()[$multiples[$i]];
            }
        }
        return $index;
    }
}