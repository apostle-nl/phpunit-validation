<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsIp;

class IsIpTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsIp();

        $this->assertTrue($constraint->matches('192.168.2.1'));
        $this->assertFalse($constraint->matches('256.256.256.1'));
    }
}
