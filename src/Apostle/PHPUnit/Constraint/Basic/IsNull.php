<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
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
