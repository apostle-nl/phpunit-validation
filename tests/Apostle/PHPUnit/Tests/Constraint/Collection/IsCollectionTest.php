<?php
namespace Apostle\PHPUnit\Tests\Constraint\Collection;

use Apostle\PHPUnit\Constraint\Number\InRange;
use Apostle\PHPUnit\Constraint\Collection\IsCollection;

class IsCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsCollection(array(
            'foo' => new InRange(1, 2)
        ));

        $this->assertFalse($constraint->matches(array('foo' => 0)));
        $this->assertTrue($constraint->matches(array('foo' => 1)));
        $this->assertTrue($constraint->matches(array('foo' => 2)));
        $this->assertFalse($constraint->matches(array('foo' => 3)));
    }

    public function testConstraintWithAllowedExtraFields()
    {
        $constraint = new IsCollection(array(
            'foo' => new InRange(1, 2)
        ), false, true);

        $this->assertTrue($constraint->matches(array()));
        $this->assertTrue($constraint->matches(array('foo' => 1)));
    }

    public function testConstraintWithAllowedMissingFields()
    {
        $constraint = new IsCollection(array(
            'foo' => new InRange(1, 2)
        ), true);

        $this->assertTrue($constraint->matches(array('foo' => 1, 'bar' => 2)));
    }

    public function testToString()
    {
        $constraint = new IsCollection(array('foo' => 1));
        $this->assertEquals('matches the collection specification', $constraint->toString());
    }
}
