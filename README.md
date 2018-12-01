# PHP CleanArchitecture
 
[![Software License][ico-license]][link-license]

## Introduction
``` Folder: src/Domain ```

The domain model and domain services layers of our application are central to everything else. They contain our business logic, which is the portion of our application that will not change depending on which libraries or frameworks we decide to use, or how we choose to persist our database.

## Execute commands
```
composer test
```

This command execute some individual task like: 

- PHP Parallel Lint: composer lint.
- PHP Style Check: composer style. If you want to fix style issues automatically: composer fix-style.
- PHP Unit: composer phpunit.

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-license]: LICENSE
