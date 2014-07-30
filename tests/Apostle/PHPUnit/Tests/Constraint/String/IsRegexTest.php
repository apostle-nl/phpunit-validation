<?php
namespace Apostle\PHPUnit\Tests\Constraint\String;

use Apostle\PHPUnit\Constraint\String\IsRegex;

class IsRegexTest extends \PHPUnit_Framework_TestCase
{
    public function testMatchingConstraint()
    {
        $constraint = new IsRegex('/foo/');

        $this->assertTrue($constraint->matches('foobar'));
        $this->assertFalse($constraint->matches('fo'));
    }

    public function testNotMatchingConstraint()
    {
        $constraint = new IsRegex('/foo/', false);

        $this->assertTrue($constraint->matches('fo'));
        $this->assertFalse($constraint->matches('foobar'));
    }

    public function testToString()
    {
        $constraint = new IsRegex('/foo/');
        $this->assertEquals('matches the regular expression "/foo/"', $constraint->toString());

        $constraint = new IsRegex('/foo/', false);
        $this->assertEquals('does not match the regular expression "/foo/"', $constraint->toString());
    }
}
