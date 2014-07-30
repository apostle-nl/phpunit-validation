<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Asserts that a value is a valid date, meaning either a `DateTime` object or
 * a string (or an object that can be cast into a string) that follows a
 * valid `YYYY-MM-DD` format.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsDate extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Date();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid date';
    }
}
