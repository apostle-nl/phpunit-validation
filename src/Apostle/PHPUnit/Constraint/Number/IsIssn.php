<?php
namespace Apostle\PHPUnit\Constraint\Number;

use Symfony\Component\Validator\Constraints\Issn;
use Apostle\PHPUnit\Constraint\Constraint;

/**
 * Asserts that a value is a valid International Standard Serial Number (ISSN).
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsIssn extends Constraint
{
    /** @var Boolean */
    private $caseSensitive;

    /** @var Boolean */
    private $requireHyphen;

    /**
     * @param Boolean Whether to allow ISSN values to end with a lower case 'x'.
     *                When set to `true`, the assertion requires an upper case
     *                'X'.
     * @param Boolean Whether to allow non hyphenated ISSN values. When
     *                set to `true`, the assertion requires a hyphenated ISSN
     *                value.
     */
    public function __construct($caseSensitive = false, $requireHyphen = false)
    {
        parent::__construct();

        $this->caseSensitive = (Boolean) $caseSensitive;
        $this->requireHyphen = (Boolean) $requireHyphen;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Issn(array(
            'caseSensitive' => $this->caseSensitive,
            'requireHyphen' => $this->requireHyphen
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid ISSN number';
    }
}
