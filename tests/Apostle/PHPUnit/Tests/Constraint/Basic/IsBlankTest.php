<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsBlank;

class IsBlankTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsBlank();

        $this->assertTrue($constraint->matches(''));
        $this->assertTrue($constraint->matches(null));
        $this->assertFalse($constraint->matches('foo'));
    }

    public function testToString()
    {
        $constraint = new IsBlank();
        $this->assertEquals('is blank', $constraint->toString());
    }
}
