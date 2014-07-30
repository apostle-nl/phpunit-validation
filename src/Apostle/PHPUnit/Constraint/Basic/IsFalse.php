<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\False;

/**
 * Asserts that a value is false. Specifically, this checks to see if the value
 * is exactly `false`, exactly the integer `0`, or exactly the string `"0"`.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsFalse extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new False();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is false';
    }
}
