<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\True;

/**
 * Asserts that a value is true. Specifically, this checks to see if the value
 * is exactly `true`, exactly the integer `1`, or exactly the string
 * `"1"`.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsTrue extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new True();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is true';
    }
}
