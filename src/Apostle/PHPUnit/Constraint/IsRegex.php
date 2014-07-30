<?php
namespace Apostle\PHPUnit\Constraint;

use Symfony\Component\Validator\Constraints\Regex;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsRegex extends Constraint
{
    /** @var Boolean */
    private $match;

    /** @var string */
    private $pattern;

    /**
     * @param string  $pattern
     * @param Boolean $match
     */
    public function __construct($pattern, $match = true)
    {
        $this->pattern = (string) $pattern;
        $this->match   = (Boolean) $match;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Regex(array('pattern' => $this->pattern, 'match' => $this->match));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        if ($this->match) {
            return sprintf('matches the regular expression %s', $this->pattern);
        }

        return sprintf('does not match the regular expression %s', $this->pattern);
    }
}
