<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Email;

/**
 * Asserts that a value is a valid email address.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsEmail extends Constraint
{
    /** @var Boolean */
    private $mx;

    /** @var Boolean */
    private $host;

    /** @var Boolean */
    private $strict;

    /**
     * @param Boolean When false, the email will be validated against a simple
     *                regular expression. If true, then the
     *                egulias/email-validator library is required to perform an
     *                RFC compliant validation.
     * @param Boolean If true, then the checkdnsrr PHP function will be used to
     *                check the validity of the MX or the A or the AAAA record
     *                of the host of the given email.
     * @param Boolean If true, then the `checkdnsrr` PHP function will be used
     *                to check the validity of the MX record of the host of the
     *                given email.
     */
    public function __construct($strict = false, $host = false, $mx = false)
    {
        $this->strict = (Boolean) $strict;
        $this->host   = (Boolean) $host;
        $this->mx     = (Boolean) $mx;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Email(array(
            'strict'    => $this->strict,
            'checkMX'   => $this->mx,
            'checkHost' => $this->host,
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid e-mail address';
    }
}
