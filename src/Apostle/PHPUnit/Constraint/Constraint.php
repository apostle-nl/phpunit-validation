<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraint as ValidatorConstraint;

/**
 * Base constraint class
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
abstract class Constraint extends \PHPUnit_Framework_Constraint
{
    /**
     * {@inheritDoc}
     */
    public function matches($other)
    {
        return !count(Validation::createValidator()->validateValue($other, $this->getConstraint()));
    }

    /**
     * @return ValidatorConstraint
     */
    abstract public function getConstraint();
}
