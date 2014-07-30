<?php
namespace Apostle\PHPUnit\Constraint\Collection;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsCollection extends Constraint
{
    /** @var array */
    private $fields;

    /**
     * @param Constraint[] An associative array defining all of the keys in the
     *                     collection and, for each key, exactly which
     *                     assertion(s) should be used against that element of
     *                     the collection.
     * @param Boolean      If set to `false` and the underlying collection
     *                     contains one or more elements that are not included
     *                     in the fields option, the assertion will fail. If
     *                     set to `true`, extra fields are ok.
     * @param Boolean      If set to `false` and one or more fields from the
     *                     fields option are not present in the underlying
     *                     collection, the assertion will fail. If set to
     *                     `true`, it's ok if some fields in the fields option
     *                     are not present in the underlying collection.
     */
    public function __construct(array $fields, $allowExtra = false, $allowMissing = false)
    {
        parent::__construct();

        $this->fields       = $fields;
        $this->allowExtra   = (Boolean) $allowExtra;
        $this->allowMissing = (Boolean) $allowMissing;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        $constraints = array();

        foreach ($this->fields as $k => $c) {
            $constraints[$k] = $this->resolveConstraints($c);
        }

        return new Collection(array(
            'fields'             => $constraints,
            'allowExtraFields'   => $this->allowExtra,
            'allowMissingFields' => $this->allowMissing
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'matches the collection specification';
    }

    private function resolveConstraints($constraint)
    {
        if ($constraint instanceof Constraint) {
            return $constraint->getConstraint();
        }

        return array_map(function ($c) {
            return $this->resolveConstraints($c);
        }, $constraint);
    }
}
