## Installation

SevenSpan Segment is a [Segment](https://segment.com/) bridge for Laravel. This version requires [PHP](https://php.net) 8.2, and supports Laravel 9. Simply require the package using [Composer](https://getcomposer.org):

```bash
$ composer require sevenspan/segment-php-sdk:^1.0
```

Once installed, if you are not using automatic package discovery, then you need to register the `SevenSpan\SegmentPhpSdk\SegmentServiceProvider` service provider in your `config/app.php`.

## Configuration

SevenSpan Segment requires configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/segment.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

Once you've set your `write_key` value in the configuration, you're ready to go! For the most part you can follow [Segments own instructions](https://segment.com/docs/libraries/php/quickstart) however, you'll want to replace the `Analytics` classname with `Segment` - plus, you don't need to call `class_alias`.

### Identify the user

```php
Segment::identify([
    'userId' => '12345abcde',
    'traits' => [
        'name' => 'James Brooks',
        'email' => 'test@test.com',
    ],
]);
```

### Track actions

```php
Segment::track([
    'userId' => '12345abcde',
    'event' => 'Did something',
    'properties' => [
        'was_awesome' => true,
    ],
]);
```

## Security

Our full security policy is available to read [here](https://github.com/7span/segment-php-sdk/security/policy).

## License

SevenSpan Segment is licensed under [The MIT License (MIT)](LICENSE).
