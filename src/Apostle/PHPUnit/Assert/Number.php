<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Constraint\Number\IsIsbn;
use Apostle\PHPUnit\Constraint\Number\IsIssn;
use Apostle\PHPUnit\Constraint\Number\InRange;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Number
{
    public static function assertIssn($value, $caseSensitive = false, $requireHyphen = false, $message = '')
    {
        self::assertThat($value, self::isIssn($caseSensitive, $requireHyphen), $message);
    }

    public static function isIssn($caseSensitive = false, $requireHyphen = false)
    {
        return new IsIssn($caseSensitive, $requireHyphen);
    }

    public static function assertIsbn($value, $type = null, $message = '')
    {
        self::assertThat($value, self::isIsbn($type), $message);
    }

    public static function isIsbn($type = null)
    {
        return new IsIsbn($type);
    }

    public static function assertInRange($value, $min, $max, $message = '')
    {
        self::assertThat($value, self::inRange($min, $max), $message);
    }

    public static function inRange($min, $max)
    {
        return new InRange($min, $max);
    }
}
