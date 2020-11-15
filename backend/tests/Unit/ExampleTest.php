<?php

namespace Tests\Unit;

use App\Models\Stock;
use Tests\TestCase;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testGetAllStock()
    {
        $stocks = Stock::getAllStock();
        $stocks = json_decode(json_encode($stocks), true);

        var_dump($stocks);
        exit;
    }
}
