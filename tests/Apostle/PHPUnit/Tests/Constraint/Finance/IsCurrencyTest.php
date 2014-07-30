<?php
namespace Apostle\PHPUnit\Tests\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Finance\IsCurrency;

class IsCurrencyTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsCurrency();

        $this->assertTrue($constraint->matches('EUR'));
        $this->assertFalse($constraint->matches('FOO'));
    }

    public function testToString()
    {
        $constraint = new IsCurrency();
        $this->assertEquals('is a valid currency', $constraint->toString());
    }
}
