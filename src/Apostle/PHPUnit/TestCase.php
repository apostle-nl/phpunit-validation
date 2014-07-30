<?php
namespace Apostle\PHPUnit;

use Apostle\PHPUnit\Constraint\Basic\IsType;
use Apostle\PHPUnit\Constraint\Basic\IsTrue;
use Apostle\PHPUnit\Constraint\Basic\IsFalse;
use Apostle\PHPUnit\Constraint\Basic\IsBlank;
use Apostle\PHPUnit\Constraint\Basic\IsNotBlank;
use Apostle\PHPUnit\Constraint\Basic\IsNull;
use Apostle\PHPUnit\Constraint\Basic\IsNotNull;

use Apostle\PHPUnit\Constraint\Date\IsDate;
use Apostle\PHPUnit\Constraint\Date\IsTime;
use Apostle\PHPUnit\Constraint\Date\IsDateTime;

use Apostle\PHPUnit\Constraint\Finance\IsIban;
use Apostle\PHPUnit\Constraint\Finance\PassesLuhn;
use Apostle\PHPUnit\Constraint\Finance\IsCurrency;
use Apostle\PHPUnit\Constraint\Finance\IsCardScheme;

use Apostle\PHPUnit\Constraint\Number\IsIsbn;
use Apostle\PHPUnit\Constraint\Number\IsIssn;
use Apostle\PHPUnit\Constraint\Number\InRange;

use Apostle\PHPUnit\Constraint\String\IsEmail;
use Apostle\PHPUnit\Constraint\String\IsIp;
use Apostle\PHPUnit\Constraint\String\IsLength;
use Apostle\PHPUnit\Constraint\String\IsRegex;
use Apostle\PHPUnit\Constraint\String\IsUrl;
use Apostle\PHPUnit\Constraint\String\IsUuid;

/**
 * An expanded set of assertions.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    public static function assertType($value, $type, $message = '')
    {
        self::assertThat($value, self::isType($type), $message);
    }

    public static function isType($type)
    {
        return new IsType($type);
    }

    public static function assertTrue($value, $message = '')
    {
        self::assertThat($value, self::isTrue(), $message);
    }

    public static function isTrue()
    {
        return new IsTrue();
    }

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

    public static function assertIban($value, $message)
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

    public static function assertEmail($value, $strict = false, $host = false, $mx = false, $message = '')
    {
        self::assertThat($value, self::isEmail($strict, $host, $mx), $message);
    }

    public static function isEmail($strict = false, $host = false, $mx = false)
    {
        return new IsEmail($strict, $host, $mx);
    }

    public static function assertIp($value, $version = '4', $message = '')
    {
        self::assertThat($value, self::isIp($version), $message);
    }

    public static function isIp($version = '4')
    {
        return new IsIp($version);
    }

    public static function assertLength($value, $min, $max = 0, $message = '')
    {
        self::assertThat($value, self::isLength($min, $max), $message);
    }

    public static function isLength($min, $max = 0)
    {
        return new IsLength($min, $max);
    }

    public static function assertMatchesRegex($value, $pattern, $message = '')
    {
        self::assertThat($value, self::matchesRegex($pattern), $message);
    }

    public static function matchesRegex($pattern)
    {
        return new IsRegex($pattern);
    }

    public static function assertNotMatchesRegex($value, $pattern, $message = '')
    {
        self::assertThat($value, self::notMatchesRegex($pattern), $message);
    }

    public static function notMatchesRegex($pattern)
    {
        return new IsRegex($pattern, false);
    }

    public static function assertUrl($value, array $protocols = array(), $message = '')
    {
        self::assertThat($value, self::isUrl($protocols), $message);
    }

    public static function isUrl(array $protocols = array())
    {
        return new IsUrl($protocols);
    }

    public static function assertUuid($value, $strict = false, array $versions = array(1, 2, 3, 4, 5), $message = '')
    {
        self::assertThat($value, self::isUuid($strict, $versions), $message);
    }

    public static function isUuid($strict = false, array $versions = array(1, 2, 3, 4, 5))
    {
        return new IsUuid($strict, $versions);
    }
}
