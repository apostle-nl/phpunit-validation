<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
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
