<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Time;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsTime extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Time();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid time';
    }
}
