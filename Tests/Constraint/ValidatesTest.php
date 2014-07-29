<?php

use Symfony\Component\Validator\Constraints\Count;

class Extensions_Validation_Constraint_ValidatesTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new PHPUnit_Extensions_Validation_Constraint_Validates(new Count(array(
            'min' => 1,
            'max' => 3
        )));

        $this->assertTrue($constraint->evaluate(array(1, 2), '', true));
        $this->assertFalse($constraint->evaluate(array(), '', true));

        try {
            $this->assertThat(array(), $constraint, '');
        } catch (PHPUnit_Framework_ExpectationFailedException $e) {
            $this->assertEquals(
                'Failed asserting that the given value validates against the given validator constraint.',
                $e->getMessage()
            );
        }
    }
}
