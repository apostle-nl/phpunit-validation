<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Uuid;

/**
 * Asserts that a value is a valid Universally unique identifier (UUID) per
 * RFC 4122. By default, this will validate the format according to the RFC's
 * guidelines, but this can be relaxed to accept non-standard UUIDs that other
 * systems (like PostgreSQL) accept. UUID versions can also be restricted using
 * a whitelist.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsUuid extends Constraint
{
    /** @var Boolean */
    private $strict;

    /** @var array */
    private $versions;

    /**
     * @param Boolean If this argument is set to `true` the constraint will
     *                check if the UUID is formatted per the RFC's input format
     *                rules: `216fff40-98d9-11e3-a5e2-0800200c9a66`. Setting
     *                this to `false` will allow alternate input formats.
     * @param array   This argument can be used to only allow specific UUID
     *                versions. Valid versions are 1 - 5.
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
