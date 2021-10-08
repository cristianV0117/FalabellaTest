<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
use PHPUnit\Framework\TestCase;
use Core\Falabella;

class FalabellaTest extends TestCase
{
    /** @test */
    public function get_array()
    {
        $falabella = new Falabella;

        $this->assertIsArray($falabella->__invoke());
    }
}