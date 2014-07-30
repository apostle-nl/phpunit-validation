<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsNotBlank;

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
