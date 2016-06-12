[![Build Status](https://travis-ci.org/remotelyliving/plumbus-php.svg?branch=master)](https://travis-ci.org/remotelyliving/plumbus-php)
[![Latest Stable Version](https://poser.pugx.org/remotelyliving/plumbus-php/v/stable)](https://packagist.org/packages/remotelyliving/plumbus-php)
[![Total Downloads](https://poser.pugx.org/remotelyliving/plumbus-php/downloads)](https://packagist.org/packages/remotelyliving/plumbus-php)
[![License](https://poser.pugx.org/remotelyliving/plumbus-php/license)](https://packagist.org/packages/remotelyliving/plumbus-php)
[![Monthly Downloads](https://poser.pugx.org/remotelyliving/plumbus-php/d/monthly)](https://packagist.org/packages/remotelyliving/plumbus-php)
[![Daily Downloads](https://poser.pugx.org/remotelyliving/plumbus-php/d/daily)](https://packagist.org/packages/remotelyliving/plumbus-php)

# plumbus-php
A regular old plumbus lib in php. Just as every home has a plumbus, your repo should too.

https://www.youtube.com/embed/eMJk4y9NGvE

### Installation

```bash
composer require remotelyliving/plumbus-php
```

### Usage

```php
$plumbus_factory = new Remotelyliving\PlumbusPhp\Factories\PlumbusFactory();
$plumbus         = $plumbus_factory->make();
```

### Tests

Clone repo and `composer install`

Run `vendor/bin/behat` to see the whole script from the plumbus scene slightly gherkinized.

Run `vendor/bin/phpunit` to really just watch some tests pass.


