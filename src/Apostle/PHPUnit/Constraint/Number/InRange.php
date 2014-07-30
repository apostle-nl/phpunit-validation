<?php
namespace Apostle\PHPUnit\Constraint\Number;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Asserts that a given number is between some minimum and maximum number.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class InRange extends Constraint
{
    /** @var integer */
    private $min;

    /** @var integer */
    private $max;

    /**
     * @param integer The minimum value. Assertion will fail if the tested value
     *                is less than this minimum value.
     * @param integer This required option is the maximum value. The assertion
     *                will fail if the tested value is greater than this
     *                maximum value.
     */
    public function __construct($min, $max)
    {
        $this->min = (integer) $min;
        $this->max = (integer) $max;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Range(array('min' => $this->min, 'max' => $this->max));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        if ($this->min == $this->max) {
            return sprintf('is exactly %d', $this->min);
        } else {
            return sprintf('is between %d and %d', $this->min, $this->max);
        }
    }
}
