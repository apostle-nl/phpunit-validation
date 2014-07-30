<?php
namespace Apostle\PHPUnit\Tests\Constraint\String;

use Apostle\PHPUnit\Constraint\String\IsLength;

class IsLengthTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsLength(3, 5);
        $this->assertFalse($constraint->matches('fo'));
        $this->assertTrue($constraint->matches('foo'));
        $this->assertTrue($constraint->matches('fooo'));
        $this->assertTrue($constraint->matches('foooo'));
        $this->assertFalse($constraint->matches('fooooo'));

        $constraint = new IsLength(0, 3);
        $this->assertTrue($constraint->matches(''));
        $this->assertTrue($constraint->matches('f'));
        $this->assertTrue($constraint->matches('fo'));
        $this->assertTrue($constraint->matches('foo'));
        $this->assertFalse($constraint->matches('fooo'));

        $constraint = new IsLength(1);
        $this->assertTrue($constraint->matches('f'));
        $this->assertTrue($constraint->matches('fo'));
    }

    public function testThrowExceptionOnInvalidConstructorArguments()
    {
        $this->setExpectedException('InvalidArgumentException');

        $constraint = new IsLength();
    }

    public function testConvertToString()
    {
        $constraint = new IsLength(1);
        $this->assertEquals('is at least 1 characters', $constraint->toString());

        $constraint = new IsLength(0, 1);
        $this->assertEquals('is at most 1 characters', $constraint->toString());

        $constraint = new IsLength(1, 2);
        $this->assertEquals('is between 1 and 2 characters', $constraint->toString());

        $constraint = new IsLength(2, 2);
        $this->assertEquals('is exactly 2 characters', $constraint->toString());
    }
}
