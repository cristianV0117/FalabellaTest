<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
namespace Core;
use Core\IOuput;
final class Falabella
{
    /**
     * @trait Values
     */
    use Values;

    private $ouput;

    /**
     * @method __construct()
     * @param IOuput $ouput
     */
    public function __construct(IOuput $ouput)
    {
        $this->ouput = $ouput;
    }

    /**
     * @return string
     */
    public function __invoke(): string
    {
        $response = [];

        for ($index = 1; $index <= 100; $index++) {
            array_push($response, $this->getMultipleNumberValue($index));
        }

        return $this->ouput->json($response);
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