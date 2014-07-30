<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Null;

/**
 * Asserts that a value is exactly equal to `null`. To force that a property is
 * simply blank (blank string or `null`), see the `Blank` constraint. To ensure
 * that a property is not `null`, see `NotNull`.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsNull extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Null();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is null';
    }
}
