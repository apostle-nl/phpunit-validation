# PHPUnit Validation

The PHPUnit Validation bundle allows you to use the Symfony
[Validator](https://github.com/symfony/validator) component in PHPUnit tests.

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

use Symfony\Component\Validator\Constraints as Assert;

class TestCase extends \PHPUnit_Extensions_Validation_TestCase
{
    public function testValidates()
    {
        $this->assertValidatesAgainstConstraint(
            new Assert\Length(array('min' => 3, 'max' => 6)),
            'foobar'
        );
    }

    public function testNotValidates()
    {
        $this->assertValidatesAgainstConstraint(
            new Assert\Length(array('min' = >3, 'max' => 6)),
            'foobarbaz'
        );
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
