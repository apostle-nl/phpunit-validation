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

    public function testToString()
    {
        $constraint = new InRange(0, 1);
        $this->assertEquals('is between 0 and 1', $constraint->toString());

        $constraint = new InRange(1, 1);
        $this->assertEquals('is exactly 1', $constraint->toString());
    }
}
