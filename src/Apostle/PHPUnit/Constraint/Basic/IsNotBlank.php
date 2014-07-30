<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsNotBlank extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new NotBlank();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is not blank';
    }
}
