<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsEmail;

class IsEmailTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsEmail();

        $this->assertTrue($constraint->matches('info@apostle.nl'));
        $this->assertFalse($constraint->matches('foo'));
    }
}
