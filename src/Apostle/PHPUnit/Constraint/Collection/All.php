<?php
namespace Apostle\PHPUnit\Constraint\Collection;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\All as AllConstraint;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class All extends Constraint
{
    /** @var Constraint[] */
    private $constraints;

    /**
     * @param Constraint[] An array of assertions that you want to apply to
     *                     each element of the underlying array.
     */
    public function __construct(array $constraints)
    {
        parent::__construct();

        $this->constraints = $constraints;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new AllConstraint(array('constraints' => array_map(function ($c) {
            return $c->getConstraint();
        }, $this->constraints)));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'all underlying assertions are succesfull';
    }
}
