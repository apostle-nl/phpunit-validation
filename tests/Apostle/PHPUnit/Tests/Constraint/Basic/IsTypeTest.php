<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsType;

class IsTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsType('integer');

        $this->assertTrue($constraint->matches(1));
        $this->assertFalse($constraint->matches('1'));
        $this->assertFalse($constraint->matches(true));
    }

    public function testToString()
    {
        $constraint = new IsType('integer');
        $this->assertEquals('is of type integer', $constraint->toString());
    }
}
