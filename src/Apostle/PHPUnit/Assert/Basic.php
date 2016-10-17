<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Assert\Basic\Type;
use Apostle\PHPUnit\Assert\Basic\Truthy;
use Apostle\PHPUnit\Constraint\Basic\IsFalse;
use Apostle\PHPUnit\Constraint\Basic\IsBlank;
use Apostle\PHPUnit\Constraint\Basic\IsNotBlank;
use Apostle\PHPUnit\Constraint\Basic\IsNull;
use Apostle\PHPUnit\Constraint\Basic\IsNotNull;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Basic
{
    use Type;
    use True;

    public static function assertFalse($value, $message = '')
    {
        self::assertThat($value, self::isFalse(), $message);
    }

    public static function isFalse()
    {
        return new IsFalse();
    }

    public static function assertBlank($value, $message = '')
    {
        self::assertThat($value, self::isBlank(), $message);
    }

    public static function isBlank()
    {
        return new IsBlank();
    }

    public static function assertNotBlank($value, $message = '')
    {
        self::assertThat($value, self::isNotBlank(), $message);
    }

    public static function isNotBlank()
    {
        return new IsNotBlank();
    }

    public static function assertNull($value, $message = '')
    {
        self::assertThat($value, self::isNull(), $message);
    }

    public static function isNull()
    {
        return new IsNull();
    }

    public static function assertNotNull($value, $message = '')
    {
        self::assertThat($value, self::isNotNull(), $message);
    }

    public static function isNotNull()
    {
        return new IsNotNull();
    }
}
