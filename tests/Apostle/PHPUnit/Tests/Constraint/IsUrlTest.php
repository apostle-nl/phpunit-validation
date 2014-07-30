<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsUrl;

class IsUrlTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsUrl(array('ftp'));

        $this->assertTrue($constraint->matches('ftp://google.com'));
        $this->assertTrue($constraint->matches('http://google.com'));
        $this->assertTrue($constraint->matches('https://google.com'));
        $this->assertFalse($constraint->matches('feed://google.com'));
    }
}
