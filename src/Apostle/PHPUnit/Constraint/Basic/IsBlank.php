<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Blank;

/**
 * Asserts that a value is blank, defined as equal to a blank string or equal
 * to `null`. To force that a value strictly be equal to `null`, see the `Null`
 * constraint. To force that a value is not blank, see `NotBlank`.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsBlank extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Blank();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is blank';
    }
}
