<?php
namespace Apostle\PHPUnit\Tests\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Finance\PassesLuhn;

class PassesLuhnTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new PassesLuhn();

        $this->assertTrue($constraint->matches('4111111111111111'));
        $this->assertFalse($constraint->matches('411111111111111'));
    }

    public function testToString()
    {
        $constraint = new PassesLuhn();
        $this->assertEquals('passes the Luhn algorithm', $constraint->toString());
    }
}
