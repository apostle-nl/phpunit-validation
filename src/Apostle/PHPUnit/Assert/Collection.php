<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Constraint\Collection\All;
use Apostle\PHPUnit\Constraint\Collection\Count;
use Apostle\PHPUnit\Constraint\Collection\IsCollection;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Collection
{
    public static function assertAll(array $constraints, $value, $message = '')
    {
        self::assertThat($value, self::all($constraints), $message);
    }

    public static function all(array $constraints)
    {
        return new All($constraints);
    }

    public static function assertElements($value, $min, $max, $message = '')
    {
        self::assertThat($value, self::count($min, $max), $message);
    }

    public static function elements($min, $max)
    {
        return new Count($min, $max);
    }

    public static function assertCollection(array $fields, $value, $allowMissing = false, $allowExtra = false, $message = '')
    {
        self::assertThat($value, self::isCollection($fields, $allowMissing, $allowExtra), $message);
    }

    public static function isCollection(array $fields, $allowMissing = false, $allowExtra = false)
    {
        return new IsCollection($fields, $allowMissing, $allowExtra);
    }
}
