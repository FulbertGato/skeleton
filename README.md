# SessionManager

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A lightweignt php session manager
## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```

src/

```


## Install

Via Composer

``` bash
$ composer require FulbertGato/SessionManager
```

## Usage

``` php

//Setup autoload
require "vendor\autoload.php"

//creating a brand new sessionManager objet
$sessionManager= new FulbertGato\SessionManager();

//Set the foo  session variable
$sessionManager->setSession("foo","bar");

//check if foo variable exist

$fooExist = $sessionManager->keyExist("foo");

//Get  foo session variable
$foo = $sessionManager->getSession("foo");
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email gatojunior.co@gmail.com instead of using the issue tracker.

## Credits

- [Gato Junior][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/FulbertGato/SessionManager.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/FulbertGato/SessionManager/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/FulbertGato/SessionManager.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/FulbertGato/SessionManager.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/FulbertGato/SessionManager.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/FulbertGato/SessionManager
[link-travis]: https://travis-ci.org/FulbertGato/SessionManager
[link-scrutinizer]: https://scrutinizer-ci.com/g/FulbertGato/SessionManager/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/FulbertGato/SessionManager
[link-downloads]: https://packagist.org/packages/FulbertGato/SessionManager
[link-author]: https://github.com/FulbertGato
[link-contributors]: ../../contributors
