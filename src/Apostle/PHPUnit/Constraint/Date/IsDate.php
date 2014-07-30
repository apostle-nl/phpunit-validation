<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsDate extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Date();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid date';
    }
}
