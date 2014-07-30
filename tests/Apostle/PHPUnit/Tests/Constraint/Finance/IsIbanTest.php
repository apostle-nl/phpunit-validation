<?php
namespace Apostle\PHPUnit\Tests\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Finance\IsIban;

class IsIbanTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsIban();

        $this->assertTrue($constraint->matches('AD1200012030200359100100'));
        $this->assertFalse($constraint->matches('AD120001203020035910010'));
    }

    public function testToString()
    {
        $constraint = new IsIban();
        $this->assertEquals('is a valid IBAN number', $constraint->toString());
    }
}
