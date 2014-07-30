<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsFalse;

class IsFalseTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsFalse();

        $this->assertTrue($constraint->matches(0));
        $this->assertTrue($constraint->matches('0'));
        $this->assertTrue($constraint->matches(false));
        $this->assertFalse($constraint->matches(1));
        $this->assertFalse($constraint->matches('1'));
        $this->assertFalse($constraint->matches(true));
    }
}
