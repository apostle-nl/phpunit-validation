<?php
namespace Apostle\PHPUnit\Constraint\Number;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Range;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class InRange extends Constraint
{
    /** @var integer */
    private $min;

    /** @var integer */
    private $max;

    /**
     * @param integer $min
     * @param integer $max
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
