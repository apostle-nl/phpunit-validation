<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Uuid;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsUuid extends Constraint
{
    /** @var Boolean */
    private $strict;

    /** @var array */
    private $versions;

    /**
     * @param Boolean $strict
     * @param array   $versions
     */
    public function __construct($strict = false, $versions = array(1, 2, 3, 4, 5))
    {
        $this->strict   = (Boolean) $strict;
        $this->versions = $versions;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Uuid(array('versions' => $this->versions, 'strict' => $this->strict));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid UUID';
    }
}
