<?php

use Symfony\Component\Validator\Constraint;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class PHPUnit_Extensions_Validation_TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Assert that a given value validates against a validation constraint.
     *
     * @param Constraint $expected
     * @param mixed      $actual
     * @param string     $message
     */
    public static function assertValidatesAgainstConstraint(Constraint $expected, $actual, $message = '')
    {
        $constraint = new PHPUnit_Extensions_Validation_Constraint_Validates($expected);

        self::assertThat($actual, $constraint, $message);
    }
}
