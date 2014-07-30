<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\True;

/**
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
