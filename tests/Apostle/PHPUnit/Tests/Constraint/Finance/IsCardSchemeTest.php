<?php
namespace Apostle\PHPUnit\Tests\Constraints\Finance;

use Apostle\PHPUnit\Constraint\Finance\IsCardScheme;

class IsCardSchemeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsCardScheme('VISA');

        $this->assertTrue($constraint->matches('4111111111111111'));
        $this->assertFalse($constraint->matches('411111111111111'));
    }

    public function testToString()
    {
        $constraint = new IsCardScheme('VISA');
        $this->assertEquals('fits the VISA card scheme', $constraint->toString());

        $constraint = new IsCardScheme(array('VISA', 'MASTERCARD'));
        $this->assertEquals('fits any of the following card schemes: ["VISA","MASTERCARD"]', $constraint->toString());
    }
}
