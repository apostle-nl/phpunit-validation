<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Ip;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsIp extends Constraint
{
    /** @var string */
    private $version;

    /**
     * Constructor
     *
     * @param string $version
     */
    public function __construct($version = '4')
    {
        $this->version = (string) $version;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Ip(array('version' => $this->version));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid IP address';
    }
}
