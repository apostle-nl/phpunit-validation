<?php
namespace Apostle\PHPUnit\Tests\Constraint\Date;

use Apostle\PHPUnit\Constraint\Date\IsDate;

class IsDateTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsDate();

        $this->assertTrue($constraint->matches('1970-01-01'));
        $this->assertFalse($constraint->matches('199-01-1'));
    }
}
