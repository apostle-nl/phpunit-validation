<?php
namespace Apostle\PHPUnit\Tests\Constraint\Date;

use Apostle\PHPUnit\Constraint\Date\IsDateTime;

class IsDateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsDateTime();

        $this->assertTrue($constraint->matches('1970-01-01 00:00:00'));
        $this->assertFalse($constraint->matches('199-01-1 1:9'));
    }
}
