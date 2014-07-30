<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsType;

class IsTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsType('integer');

        $this->assertTrue($constraint->matches(1));
        $this->assertFalse($constraint->matches('1'));
        $this->assertFalse($constraint->matches(true));
    }
}
