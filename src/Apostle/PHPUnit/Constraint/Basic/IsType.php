<?php
namespace Apostle\PHPUnit\Constraint\Basic;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Type;

/**
 * Asserts that a value is of a specific data type. For example, if a variable
 * should be an array, you can use this constraint with the `array` type option
 * to assert this.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsType extends Constraint
{
    /** @var string */
    private $type;

    /**
     * @param string The fully qualified class name or one of the PHP datatypes
     *               as determined by PHP's `is_` functions.
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
