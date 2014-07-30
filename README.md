# PHPUnit Validation

The PHPUnit Validation bundle allows you to use the Symfony
[Validator](https://github.com/symfony/validator) validation rules in PHPUnit
tests.

Some of the existing PHPUnit assertions are overloaded with Symfony validation
rules such as the `assertTrue` and `assertFalse` assertions.

## Installation

Installation is as easy as updating your `composer.json`:

```json
{
    "require": {
        "apostle/phpunit-validation": "1.0.*@dev"
    }
}
```

## Usage

Usage is as simple as the installation. All you need to do is use the base test
case class provider by this library instead of the default base test case:

```php
<?php

use Apostle\PHPUnit\TestCase;

class FooTest extends TestCase
{
    public function testBar()
    {
        $this->assertEmail('foo@example.com');
    }
}
```

This is, of course, not very exciting. The best improvements are the way you can
validate collections. Instead of either matching an array exactly or not
matching it at all you can use assertions _inside_ the array:

```
<?php

use Apostle\PHPUnit\TestCase;

class FooTest extends TestCase
{
    public function testBar()
    {
        $data = array(
            'roles' => array('ROLE_USER', 'ROLE_ADMIN', 'ROLE_SUPER_ADMIN')
        );

        $this->assertCollection(array(
            'roles' => $this->all(array($this->matchesRegex('/ROLE_(.+)/')))
        ), $data);
    }

    public function testBaz()
    {
        $data = array('this', 'that', 'thus');

        $this->assertAll(array(
            $this->matchesRegex('/th(is|at|us)/')
        ), $data);
    }
}
```

An example of all the currently existing assertions can be found in the
[example file](https://github.com/apostle-nl/phpunit-validation/blob/master/examples/example.php).

## Extra

It is also possible to use only a subset of the available assertions or even
just one of the assertions provided by this library thanks to traits:

```php
<?php

use Apostle\PHPUnit\Assert\Basic\Type;

class FooTest extends \PHPUnit_Framework_TestCase
{
    public function barTest()
    {
        $this->assertType('integer', 1);
    }
}

```

## License

This library is licensed under the BSD 2 clause license:

```
Copyright (c) 2014, Apostle <info@apostle.nl>
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those
of the authors and should not be interpreted as representing official policies,
either expressed or implied, of the FreeBSD Project.
```
