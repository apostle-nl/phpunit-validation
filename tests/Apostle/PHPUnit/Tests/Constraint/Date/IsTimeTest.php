<?php
namespace Apostle\PHPUnit\Tests\Constraint\Date;

use Apostle\PHPUnit\Constraint\Date\IsTime;

class IsTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsTime();

        $this->assertTrue($constraint->matches('00:00:00'));
        $this->assertFalse($constraint->matches('1:9'));
    }

    public function testToString()
    {
        $constraint = new IsTime();
        $this->assertEquals('is a valid time', $constraint->toString());
    }
}
