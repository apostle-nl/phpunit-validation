<?php
require_once __DIR__.'/../vendor/autoload.php';

use Apostle\PHPUnit\TestCase;

class ExampleTest extends TestCase
{
    public function testBasic()
    {
        // The blank assertion tests if a value is either blank or null
        $this->assertBlank('');
        $this->assertBlank(null);

        // The not blank assertions tests the opposite of the blank assertion
        $this->assertNotBlank('foo');

        // The null assertion tests if a value is explicitly null
        $this->assertNull(null);

        // The not null assertion tests if a value is anything but null
        $this->assertNotNull('foo');

        // The true assertion tests if a value is true, 1 or '1'
        $this->assertTrue(1);
        $this->assertTrue('1');
        $this->assertTrue(true);

        // The false assertion tests if a value is false, 0 or '0'
        $this->assertFalse(0);
        $this->assertFalse('0');
        $this->assertFalse(false);

        // The type assertion tests if a value is of a specific type or class
        $this->assertType(1, 'int');
        $this->assertType('foo', 'string');
        $this->assertType(new DateTime(), 'DateTime');
    }

    public function testDate()
    {
        // The date assertion tests if a value is a valid DateTime object or a
        // string that has the date format (YYYY-MM-DD).
        $this->assertDate(new \DateTime());
        $this->assertDate('1999-12-31');

        // The date time assertion tests if a value is valid DateTime object or
        // string that has the date time format (YYYY-MM-DD HH:MM:SS)
        $this->assertDateTime(new \DateTime());
        $this->assertDateTime('1999-12-31 23:59:59');

        // The time assertion tests if a value is a valid DateTime object or a
        // string that has the time format (HH:MM:SS)
        $this->assertTime(new \DateTime());
        $this->assertTime('23:59:59');
    }

    public function testFinance()
    {
        // The card scheme assertion tests if a value is a valid card scheme
        $this->assertCardScheme('4111111111111111', 'VISA');

        // The currency assertion tests if a value is valid currency
        $this->assertCurrency('USD');

        // The IBAN assertion tests if a value is a valid IBAN number
        $this->assertIban('AD1200012030200359100100');

        // The Luhn assertion tests if a value passes the Luhn algorithm
        $this->assertLuhn('4111111111111111');
    }

    public function testNumber()
    {
        // The in range assertion tests if a value is in a specific range
        $this->assertInRange(1, 0, 2);

        // The ISBN assertion tests if a value is a valid IBAN number
        $this->assertIsbn('978-90-274-3964-2');

        // The ISSN assertion tests if a value is a valid ISSN number
        $this->assertIssn('1050-124X');
    }

    public function testString()
    {
        // The email assertion tests if a value is a valid e-mail address
        $this->assertEmail('foo@example.com');

        // The IP assertion tests if a value is a valid IP address
        $this->assertIp('192.168.33.10');

        // The length assertion tests if a value is of a between two integers
        $this->assertLength('foo', 2, 3);

        // The regex assertion tests if a value matches a specific regex
        $this->assertMatchesRegex('fooooo', '/f[o]+/');

        // The following assertion is the opposite of the above assertion
        $this->assertNotMatchesRegex('bar', '/f[o]+/');

        // The URL assertion tests if the value is a valid URL
        $this->assertUrl('http://example.com');

        // The UUID assertion tests if a value is a valid UUID
        $this->assertUuid('216fff40-98d9-11e3-a5e2-0800200c9a66');
    }

    public function testCollection()
    {
        // The collection assertion tests if a collection adheres to a specific setup
        $data = array(
            'foo' => array(
                'bar' => 'lorem',
                'baz' => array(1, 2, 3),
                'thing' => array('something else'),
            )
        );

        $this->assertCollection(array(
            'foo' => $this->isCollection(array(
                'bar' => $this->matchesRegex('/(lorem|ipsum)/'),
                'baz' => array(
                    $this->all(array($this->inRange(0, 5))),
                    $this->elements(1, 3)
                ),
                'thing' => $this->elements(1, 1)
            ))
        ), $data);
    }
}
