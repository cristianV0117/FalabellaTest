<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
use PHPUnit\Framework\TestCase;
use Core\{Falabella, Output};

class FalabellaTest extends TestCase
{
    /** @test */
    public function get_array()
    {
        $falabella = new Falabella(new Output);

        $this->assertIsString($falabella->__invoke());
    }
}