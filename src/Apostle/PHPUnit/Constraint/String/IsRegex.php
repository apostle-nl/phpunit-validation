<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Asserts that a value matches a regular expression.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsRegex extends Constraint
{
    /** @var Boolean */
    private $match;

    /** @var string */
    private $pattern;

    /**
     * @param string  The regular expression pattern that the input will be
     *                matched against. By default, this assertion will fail if
     *                the input string does not match this regular expression
     *                (via the preg_match PHP function). However, if `match` is
     *                set to false, then the assertion will fail if the input
     *                string does match this pattern.
     * @param Boolean If `true` (or not set), this assertion will pass if the
     *                given string matches the given pattern regular expression.
     *                However, when this argument is set to `false`, the
     *                opposite will occur: the assertion will pass only if the
     *                given string does not match the pattern regular
     *                expression.
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
            return sprintf('matches the regular expression "%s"', $this->pattern);
        }

        return sprintf('does not match the regular expression "%s"', $this->pattern);
    }
}
