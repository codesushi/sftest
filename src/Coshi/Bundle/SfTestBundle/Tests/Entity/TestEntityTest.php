<?php

namespace Coshi\Bundle\SfTestBundle\Tests\Entity;

use Coshi\Bundle\SfTestBundle\Entity\Test;

/**
 * class TestTest
 *
 * class description here
 *
 * @author  Krzysztof Ozog <krzysztof.ozog@codesushi.co>
 */
class TestEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testExampleMethod()
    {
        $test = new Test();
        $this->assertFalse($test->example());
    }
}
