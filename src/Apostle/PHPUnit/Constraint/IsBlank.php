<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\Blank;

/**
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
