<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Url;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsUrl extends Constraint
{
    /** @var array */
    private $protocols;

    /**
     * @param array $protocols
     */
    public function __construct(array $protocols = array())
    {
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
