<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Asserts that a value is not blank, defined as not equal to a blank string
 * and also not equal to `null`. To force that a value is simply not equal to
 * `null`, see the `NotNull` constraint.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsNotBlank extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new NotBlank();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is not blank';
    }
}
