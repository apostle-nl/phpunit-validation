<?php
namespace Apostle\PHPUnit\Assert;

use Apostle\PHPUnit\Constraint\String\IsEmail;
use Apostle\PHPUnit\Constraint\String\IsIp;
use Apostle\PHPUnit\Constraint\String\IsLength;
use Apostle\PHPUnit\Constraint\String\IsRegex;
use Apostle\PHPUnit\Constraint\String\IsUrl;
use Apostle\PHPUnit\Constraint\String\IsUuid;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait String
{
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
