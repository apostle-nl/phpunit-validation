<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\NotNull;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsNotNull extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new NotNull();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is not null';
    }
}
