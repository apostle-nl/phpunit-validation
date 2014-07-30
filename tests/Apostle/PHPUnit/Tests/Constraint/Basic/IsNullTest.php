<?php
namespace Apostle\PHPUnit\Tests\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsNull;

class IsNullTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsNull();

        $this->assertFalse($constraint->matches(''));
        $this->assertTrue($constraint->matches(null));
    }
}
