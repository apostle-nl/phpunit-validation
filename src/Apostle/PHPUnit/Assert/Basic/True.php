<?php
namespace Apostle\PHPUnit\Assert\Basic;

use Apostle\PHPUnit\Constraint\Basic\IsTrue;

/**
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
trait True
{
    public static function assertTrue($value, $message = '')
    {
        self::assertThat($value, self::isTrue(), $message);
    }

    public static function isTrue()
    {
        return new IsTrue();
    }
}
