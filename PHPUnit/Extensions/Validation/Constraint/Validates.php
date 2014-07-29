<?php

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Validation;

/**
 * Assert that a value validates against a Symfony validator constraint.
 *
 * @author Ramon Kleiss <ramonkleiss@gmail.com>
 */
class PHPUnit_Extensions_Validation_Constraint_Validates extends PHPUnit_Framework_Constraint
{
    /** @var Constraint */
    private $constraint;

    /**
     * Creates a new constraint.
     *
     * @param Constraint $constraint
     */
    public function __construct(Constraint $constraint)
    {
        parent::__construct();

        $this->constraint = $constraint;
    }

    /**
     * {@inheritDoc}
     */
    public function matches($other)
    {
        $validator = Validation::createValidator();

        return !count($validator->validateValue($other, $this->constraint));
    }

    /**
     * {@inheritDoc}
     */
    public function failureDescription($other)
    {
        return 'the given value validates against the given validator constraint';
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        'validates against the given validator constraint';
    }
}
