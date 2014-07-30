<?php
namespace Apostle\PHPUnit\Constraint\Finance;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\CardScheme;

/**
 * Asserts that that a credit card number is valid for a given credit card
 * company.
 *
 * The constructor accepts the following values (either as a single argument
 * or as an array):
 *
 *  * `AMEX`
 *  * `CHINA_UNIONPAY`
 *  * `DINERS`
 *  * `DISCOVER`
 *  * `INSTAPAYMENT`
 *  * `JCB`
 *  * `LASER`
 *  * `MAESTRO`
 *  * `MASTERCARD`
 *  * `VISA`
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsCardScheme extends Constraint
{
    /** @var string|array*/
    private $schemes;

    /**
     * @param string|array The name of the number scheme used to assert the
     *                     credit card number, it can either be a string or an
     *                     array
     */
    public function __construct($schemes)
    {
        $this->schemes = $schemes;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new CardScheme($this->schemes);
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        if (is_string($this->schemes)) {
            return sprintf('fits the %s card scheme', $this->schemes);
        }

        return sprintf('fits any of the following card schemes: %s', json_encode($this->schemes));
    }
}
