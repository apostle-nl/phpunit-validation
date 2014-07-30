<?php
namespace Apostle\PHPUnit\Constraint\Finance;

use Symfony\Component\Validator\Constraints\Iban;
use Apostle\PHPUnit\Constraint\Constraint;

/**
 * Asserts that a bank account number has the proper format of an International
 * Bank Account Number (IBAN). IBAN is an internationally agreed means of
 * identifying bank accounts across national borders with a reduced risk of
 * propagating transcription errors.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsIban extends Constraint
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Iban();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid IBAN number';
    }
}
