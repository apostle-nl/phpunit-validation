<?php
namespace Apostle\PHPUnit\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Currency;

/**
 * Asserts that a value is a valid 3-letter ISO 4217 currency name.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsCurrency extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Currency();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid currency';
    }
}
