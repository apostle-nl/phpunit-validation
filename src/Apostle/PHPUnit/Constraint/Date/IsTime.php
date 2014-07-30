<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Time;

/**
 * Asserts that a value is a valid time, meaning either a `DateTime` object or
 * a string (or an object that can be cast into a string) that follows a valid
 * `HH:MM:SS` format.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsTime extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Time();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid time';
    }
}
