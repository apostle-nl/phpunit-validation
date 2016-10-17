<?php
namespace Apostle\PHPUnit;

use Apostle\PHPUnit\Assert\Date;
use Apostle\PHPUnit\Assert\Basic;
use Apostle\PHPUnit\Assert\Number;
use Apostle\PHPUnit\Assert\String as TextString;
use Apostle\PHPUnit\Assert\Finance;
use Apostle\PHPUnit\Assert\Collection;

/**
 * An expanded set of assertions.
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    use Date;
    use Basic;
    use Number;
    use TextString;
    use Finance;
    use Collection;
}
