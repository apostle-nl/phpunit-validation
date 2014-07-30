<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsNotNull;

class IsNotNullTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsNotNull();

        $this->assertTrue($constraint->matches(''));
        $this->assertFalse($constraint->matches(null));
    }

    public function testToString()
    {
        $constraint = new IsNotNull();
        $this->assertEquals('is not null', $constraint->toString());
    }
}
