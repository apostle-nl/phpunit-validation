<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\Null;

/**
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
