<?php
namespace Apostle\PHPUnit\Tests\Constraint\Number;

use Apostle\PHPUnit\Constraint\Number\IsIsbn;

class IsIsbnTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsIsbn();

        $this->assertTrue($constraint->matches('978-90-274-3964-2'));
        $this->assertFalse($constraint->matches('978-90-274-3964'));
    }

    public function testToString()
    {
        $constraint = new IsIsbn();
        $this->assertEquals('is a valid ISBN-10 or ISBN-13', $constraint->toString());

        $constraint = new IsIsbn('isbn10');
        $this->assertEquals('is a valid ISBN-10', $constraint->toString());

        $constraint = new IsIsbn('isbn13');
        $this->assertEquals('is a valid ISBN-13', $constraint->toString());
    }
}
