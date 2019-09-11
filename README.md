# Tertiary Institutes 

[![Build Status](https://img.shields.io/travis/stephenjude/tertiary-institutes/master.svg)](https://travis-ci.com/stephenjude/tertiary-institutes.svg?branch=master)
[![GitHub license](https://img.shields.io/github/license/stephenjude/tertiary-institutes.svg)](https://github.com/stephenjude/tertiary-institutes/blob/master/LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/tertiary-institutes.svg)](https://packagist.org/packages/stephenjude/tertiary-institutes)

A database schema, models and controllers for list of nigerian tertiary institutions.

## Installation

You can install the package via composer:

```bash
composer require stephenjude/tertiary-institutes
```

publish the migration files
``` php
    php artisan vendor:publish --tag=migrations
```
## Usage


### Tertiary Institution routes

``` php
// returns list of all universities
route('all.university');  /* institution/degrees/all */

// returns list of all states and private universities
route('all.state.private'); /* institution/degrees/stateprivate */

// returns list of all polytechnics
route('all.polytechnic'); /* institution/polytechnics */

// returns list of all college of education
route('all.colleges'); /* institution/colleges */

// returns list of all innovative institutes
route('all.ieis'); /* institution/ieis */

```

### Institution Courses routes

``` php
// returns list of all federal university courses
route('federal.university.courses', ['institution_id',   $id]); /* courses/{institution_id}/federal */ 

// returns list of all state university courses
route('state.university.courses', ['institution_id',   $id]);  /* courses/{institution_id}/state */ 

// returns list of all private university courses
route('private.university.courses', ['institution_id',   $id]);  /* courses/{institution_id}/private */ 

// returns list of all polytechnic courses
route('polytechnic.courses', ['institution_id',   $id]);  /* courses/{institution_id}/polytechnic */ 

// returns list of all college courses
route('college.courses', ['institution_id',   $id]);  /* courses/{institution_id}/college */ 

// returns list of all innovative institute courses
route('iei.courses', ['institution_id',   $id]);  /* courses/{institution_id}/iei */ 

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
