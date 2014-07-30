<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsNotBlank;

class IsNotBlankTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsNotBlank();

        $this->assertTrue($constraint->matches('foo'));
        $this->assertFalse($constraint->matches(''));
        $this->assertFalse($constraint->matches(null));
    }
}
