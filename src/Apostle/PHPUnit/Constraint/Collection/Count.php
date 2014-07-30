<?php
namespace Apostle\PHPUnit\Constraint\Collection;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Count as CountConstraint;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class Count extends Constraint
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
        parent::__construct();

        $this->min = (integer) $min;
        $this->max = (integer) $max;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new CountConstraint(array(
            'min' => $this->min,
            'max' => $this->max
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        if ($this->min == $this->max) {
            return sprintf('array collection exactly %d elements', $this->min);
        }

        return sprintf('array contains between %d and %d element', $this->min, $this->max);
    }
}
