<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
use PHPUnit\Framework\TestCase;
use Core\Output;

class OutputTest extends TestCase
{

    /** @test */
    public function get_nature_json()
    {
        $output = new Output;
        $this->assertIsString($output->json([]));
    }

    /** @test */
    public function get_json()
    {
        $output = new Output;
        $request = [
            "test" => "test"
        ];
        $json = $output->json($request);
        $this->assertArrayHasKey('test', $request);
    }
}