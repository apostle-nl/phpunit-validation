<?php
namespace Apostle\PHPUnit\Tests\Constraint\String;

use Apostle\PHPUnit\Constraint\String\IsEmail;

class IsEmailTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsEmail();

        $this->assertTrue($constraint->matches('info@apostle.nl'));
        $this->assertFalse($constraint->matches('foo'));
    }

    public function testToString()
    {
        $constraint = new IsEmail();
        $this->assertEquals('is a valid e-mail address', $constraint->toString());
    }
}
