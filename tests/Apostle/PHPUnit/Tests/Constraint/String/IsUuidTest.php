<?php
namespace Apostle\PHPUnit\Tests\Constraint\String;

use Apostle\PHPUnit\Constraint\String\IsUuid;

class IsUuidTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsUuid(true);

        $this->assertTrue($constraint->matches('216fff40-98d9-11e3-a5e2-0800200c9a66'));
        $this->assertFalse($constraint->matches('216fff4098d911e3a5e20800200c9a66'));
    }
}
