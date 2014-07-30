<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Constraint\Finance\IsIban;
use Apostle\PHPUnit\Constraint\Finance\PassesLuhn;
use Apostle\PHPUnit\Constraint\Finance\IsCurrency;
use Apostle\PHPUnit\Constraint\Finance\IsCardScheme;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Finance
{
    public static function assertIban($value, $message = '')
    {
        self::assertThat($value, self::isIban(), $message);
    }

    public static function isIban()
    {
        return new IsIban();
    }

    public static function assertLuhn($value, $message = '')
    {
        self::assertThat($value, self::passesLuhn(), $message);
    }

    public static function passesLuhn()
    {
        return new PassesLuhn();
    }

    public static function assertCurrency($value, $message = '')
    {
        self::assertThat($value, self::isCurrency(), $message);
    }

    public static function isCurrency()
    {
        return new IsCurrency();
    }

    public static function assertCardScheme($value, $schemes, $message = '')
    {
        self::assertThat($value, self::isCardScheme($schemes), $message);
    }

    public static function isCardScheme($schemes)
    {
        return new IsCardScheme($schemes);
    }
}
