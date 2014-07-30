<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Asserts that a value is a valid "datetime", meaning either a `DateTime`
 * object or a string (or an object that can be cast into a string) that
 * follows a valid `YYYY-MM-DD HH:MM:SS` format.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsDateTime extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new DateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid date and time';
    }
}
