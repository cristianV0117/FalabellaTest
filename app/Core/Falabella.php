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
        for ($index = 1; $index <= 100; $index++) {
            array_push($response, $this->getMultipleNumberValue($index));
        }
        return $response;
    }

    /**
     * @param int $index
     * @return string|int
     */
    private function getMultipleNumberValue(int $index)
    {
        $options = [
            ($index % 3 == 0 && !$index % 5 == 0) => self::values()[3],
            (!$index % 3 == 0 && $index % 5 == 0) => self::values()[5],
            ($index % 3 == 0 && $index % 5 == 0) => self::values()[35]
        ];
        foreach ($options as $key => $value) {
            if ($key) {
                return $value;
            }
        }
        return $index;
    }
}