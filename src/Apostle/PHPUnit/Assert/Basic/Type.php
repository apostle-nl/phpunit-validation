<?php
namespace Apostle\PHPUnit\Assert\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsType;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait Type
{
    public static function assertType($value, $type, $message = '')
    {
        self::assertThat($value, self::isType($type), $message);
    }

    public static function isType($type)
    {
        return new IsType($type);
    }
}
