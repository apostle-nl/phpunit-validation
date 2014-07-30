<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\False;

/**
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
