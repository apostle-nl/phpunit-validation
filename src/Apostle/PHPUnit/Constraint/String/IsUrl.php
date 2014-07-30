<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Url;

/**
 * Asserts that a value is a valid URL string.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsUrl extends Constraint
{
    /** @var array */
    private $protocols;

    /**
     * @param array The protocols that will be considered to be valid. For
     *              example, if you also need `ftp://` type URLs to be valid,
     *              you'd pass `ftp` as a protocol. `http` and `https` are
     *              added by default.
     */
    public function __construct(array $protocols = array())
    {
        parent::__construct();

        $this->protocols = array_merge(array('http', 'https'), $protocols);
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Url(array('protocols' => $this->protocols));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid URL';
    }
}
