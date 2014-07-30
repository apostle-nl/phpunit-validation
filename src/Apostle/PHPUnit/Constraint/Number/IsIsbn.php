<?php
namespace Apostle\PHPUnit\Constraint\Number;

use Symfony\Component\Validator\Constraints\Isbn;
use Apostle\PHPUnit\Constraint\Constraint;

/**
 * Asserts that an International Standard Book Number (ISBN) is either a valid
 * ISBN-10 or a valid ISBN-13.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsIsbn extends Constraint
{
    /** @var string|null */
    private $type;

    /**
     * @param string The type of ISBN to validate against. Valid values are
     *               `isbn10`, `isbn13` and `null` (the default) to accept any
     *               kind of ISBN.
     */
    public function __construct($type = null)
    {
        parent::__construct();

        $this->type = $type;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Isbn($this->type);
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        if ($this->type == 'isbn10') {
            return 'is a valid ISBN-10';
        } elseif ($this->type == 'isbn13') {
            return 'is a valid ISBN-13';
        }

        return 'is a valid ISBN-10 or ISBN-13';
    }
}
