<?php
namespace Apostle\PHPUnit\Constraint\String;

use Apostle\PHPUnit\Constraint\Constraint;
use Symfony\Component\Validator\Constraints\Ip;

/**
 * Asserts that a value is a valid IP address. By default, this will assert the
 * value as IPv4, but a number of different options exist to validate as IPv6
 * and many other combinations.
 *
 * The `version` parameter for the constructor determines exactly how the IP address is validated and can
 * take one of a variety of different values:
 *
 * __All ranges__
 *
 *  * `4` - Asserts for IPv4 addresses
 *  * `6` - Asserts for IPv6 addresses
 *  * `all` - Asserts all IP formats
 *
 * __No private ranges__
 *
 *  * `4_no_priv` - Asserts for IPv4 but without private IP ranges
 *  * `6_no_priv` - Asserts for IPv6 but without private IP ranges
 *  * `all_no_priv` - Asserts for all IP formats but without private IP ranges
 *
 * __No reserved ranges__
 *
 *  * `4_no_res` - Asserts for IPv4 but without reserved IP ranges
 *  * `6_no_res` - Asserts for IPv6 but without reserved IP ranges
 *  * `all_no_res` - Asserts for all IP formats but without reserved IP ranges
 *
 * __Only public ranges__
 *
 *  * `4_public` - Asserts for IPv4 but without private and reserved ranges
 *  * `6_public` - Asserts for IPv6 but without private and reserved ranges
 *  * `all_public` - Asserts for all IP formats but without private and reserved
 *    ranges
 *
 * @author Ramon Kleiss <ramon@apostle.nl>
 */
class IsIp extends Constraint
{
    /** @var string */
    private $version;

    /**
     * @param string Determines exactly how the IP address is validated and can
     *               take one of a variety of different values.
     */
    public function __construct($version = '4')
    {
        parent::__construct();

        $this->version = (string) $version;
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint()
    {
        return new Ip(array('version' => $this->version));
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {
        return 'is a valid IP address';
    }
}
