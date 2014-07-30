<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Email;

/**
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
     * @param Boolean $strict
     * @param Boolean $host
     * @param Boolean $mx
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
        return 'is valid e-mail address';
    }
}
