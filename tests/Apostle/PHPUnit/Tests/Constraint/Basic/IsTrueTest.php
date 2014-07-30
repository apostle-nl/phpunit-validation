<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsTrue;

class IsTrueTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsTrue();

        $this->assertTrue($constraint->matches(1));
        $this->assertTrue($constraint->matches('1'));
        $this->assertTrue($constraint->matches(true));
        $this->assertFalse($constraint->matches(0));
        $this->assertFalse($constraint->matches('0'));
        $this->assertFalse($constraint->matches(false));
    }
}
