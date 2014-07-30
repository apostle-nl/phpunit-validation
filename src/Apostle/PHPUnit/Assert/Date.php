<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Constraint\Date\IsDate;
use Apostle\PHPUnit\Constraint\Date\IsTime;
use Apostle\PHPUnit\Constraint\Date\IsDateTime;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Date
{
    public static function assertDate($value, $message = '')
    {
        self::assertThat($value, self::isDate(), $message);
    }

    public static function isDate()
    {
        return new IsDate();
    }

    public static function assertTime($value, $message = '')
    {
        self::assertThat($value, self::isTime(), $message);
    }

    public static function isTime()
    {
        return new IsTime();
    }

    public static function assertDateTime($value, $message = '')
    {
        self::assertThat($value, self::isDateTime(), $message);
    }

    public static function isDateTime()
    {
        return new IsDateTime();
    }
}
