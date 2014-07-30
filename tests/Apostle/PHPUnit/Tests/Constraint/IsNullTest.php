<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsNull;

class IsNullTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsNull();

        $this->assertFalse($constraint->matches(''));
        $this->assertTrue($constraint->matches(null));
    }
}
