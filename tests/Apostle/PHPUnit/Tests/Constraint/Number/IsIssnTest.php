<?php
namespace Apostle\PHPUnit\Tests\Constraint\Number;

use Apostle\PHPUnit\Constraint\Number\IsIssn;

class IsIssnTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsIssn();

        $this->assertTrue($constraint->matches('1050-124X'));
        $this->assertFalse($constraint->matches('1050-124'));
    }

    public function testToString()
    {
        $constraint = new IsIssn();
        $this->assertEquals('is a valid ISSN number', $constraint->toString());
    }
}
