<?php
namespace Apostle\PHPUnit\Constraint\Date;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsDateTime extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new DateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid date and time';
    }
}
