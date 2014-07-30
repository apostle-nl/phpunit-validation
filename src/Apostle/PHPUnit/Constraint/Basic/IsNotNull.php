<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\NotNull;

/**
 * Asserts that a value is not strictly equal to `null`. To ensure that a value
 * is simply not blank (not a blank string), see the `NotBlank` constraint.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsNotNull extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new NotNull();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is not null';
    }
}
