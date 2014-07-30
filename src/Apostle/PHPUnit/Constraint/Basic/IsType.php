<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Type;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsType extends Constraint
{
    /** @var string */
    private $type;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = (string) $type;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Type(array('type' => $this->type));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return sprintf('is of type %s', $this->type);
    }
}
