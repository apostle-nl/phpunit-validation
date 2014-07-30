<?php
namespace Apostle\PHPUnit\Tests\Constraint\Number;

use Apostle\PHPUnit\Constraint\Number\InRange;

class InRangeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new InRange(0, 1);

        $this->assertFalse($constraint->matches(-1));
        $this->assertTrue($constraint->matches(0));
        $this->assertTrue($constraint->matches(1));
        $this->assertFalse($constraint->matches(2));
    }
}
