<?php declare(strict_types=1);

namespace Kata\Jack;

use PHPUnit\Framework\TestCase;

class HouseTest extends Testcase
{
    public function testRecite()
    {
        $house = new House();
        $poem  = $house->recite();

        $this->assertEquals(
            'This is the house that jack built.',
            substr($poem, 0, 34),
            'poem should start with \'This is the house that jack built.\''
        );
    }
}
