<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
use PHPUnit\Framework\TestCase;
use Core\Output;

class ValuesTest extends TestCase
{

    /** @test */
    public function get_nature_array()
    {
        $this->assertIsArray(\Core\Values::values());
    }

    /** @test */
    public function get_falabella_letter()
    {
        $value =  \Core\Values::values()[3];
        $this->assertEquals(
            "Falabella", 
            $value, 
            "El resultado debe ser: Falabella");
    }

    /** @test */
    public function get_it_letter()
    {
        $value =  \Core\Values::values()[5];
        $this->assertEquals(
            "IT", 
            $value, 
            "El resultado debe ser: IT");
    }

    /** @test */
    public function get_integraciones_letter()
    {
        $value =  \Core\Values::values()[35];
        $this->assertEquals(
            "Integraciones", 
            $value, 
            "El resultado debe ser: Integraciones");
    }
}