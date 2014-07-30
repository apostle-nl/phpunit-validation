<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsRegex;

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
}
