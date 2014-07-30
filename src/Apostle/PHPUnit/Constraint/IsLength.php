<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\Length;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsLength extends Constraint
{
    /** @var integer */
    private $min;

    /** @var integer */
    private $max;

    /** @var string */
    private $charset;

    /**
     * Constructor
     *
     * @param integer $min
     * @param integer $max
     */
    public function __construct($min = 0, $max = 0)
    {
        if ($min === 0 && $max === 0) {
            throw new \InvalidArgumentException('You must specify either a minimum or maximum length');
        }

        $this->min = (integer) $min;
        $this->max = (integer) $max;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        $options = array();

        if ($this->min > 0) { $options['min'] = $this->min; }
        if ($this->max > 0) { $options['max'] = $this->max; }

        return new Length($options);
    }

    public function toString()
    {
        if ($this->min && $this->max) {
            if ($this->min !== $this->max) {
                return sprintf('is between %d and %d characters', $this->min, $this->max);
            } else {
                return sprintf('is exactly %d characters', $this->min);
            }
        } elseif (!$this->min && $this->max) {
            return sprintf('is at most %d characters', $this->max);
        } elseif ($this->min && !$this->max) {
            return sprintf('is at least %d characters', $this->min);
        }
    }
}
