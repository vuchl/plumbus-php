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

Run `vendor/bin/behat` to see the whole script from this segment.
Run `vendor/bin/phpunit` to really just watch some tests pass.


