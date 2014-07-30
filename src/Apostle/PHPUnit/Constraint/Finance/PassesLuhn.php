<?php
namespace Apostle\PHPUnit\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Luhn;

/**
 * Asserts that a credit card number passes the Luhn algorithm.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class PassesLuhn extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Luhn();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'passes the Luhn algorithm';
    }
}
