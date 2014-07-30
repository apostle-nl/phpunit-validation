<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsNotNull;

class IsNotNullTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsNotNull();

        $this->assertTrue($constraint->matches(''));
        $this->assertFalse($constraint->matches(null));
    }
}
