# Tertiary Institutes 

[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/tertiary-institutes.svg?style=flat-square)](https://packagist.org/packages/stephenjude/tertiary-institutes)

A database schema, models and controllers for list of nigerian tertiary institutions.

## Installation

You can install the package via composer:

```bash
composer require stephenjude/tertiary-institutes
```

## Usage


# Tertiary Institution routes

``` php

route('all.university'); // returns list of all universities

route('all.state.private'); // returns list of all states and private universities

route('all.polytechnic'); // returns list of all polytechnics

route('all.colleges'); // returns list of all college of education

route('all.ieis'); // returns list of all innovative institutes

```

# Institution Courses routes

``` php

route('federal.university.courses', ['institution_id',   $id]); // returns list of all federal university courses

route('state.university.courses', ['institution_id',   $id]); // returns list of all state university courses

route('private.university.courses', ['institution_id',   $id]); // returns list of all private university courses

route('polytechnic.courses', ['institution_id',   $id]); // returns list of all polytechnic courses

route('college.courses', ['institution_id',   $id]); // returns list of all college courses

route('iei.courses', ['institution_id',   $id]); // returns list of all innovative institute courses

```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email stephen@ahooba.org.ng instead of using the issue tracker.

## Credits

- [Stephen Jude](https://github.com/stephenjude)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
