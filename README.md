# URL Signer for Laminas & Mezzio

A URL signer implementation for **Laminas** and **Mezzio** that generates secure, signed URLs with an expiration date. This package allows you to sign full URLs or just query parameters, adding a layer of security for accessing resources or sharing sensitive information.

![Build Status](https://github.com/Ucar-Solutions/laminas-uri-signer/workflows/Run%20Unit%20Tests/badge.svg)
![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)


## Features

- Sign a given URI
- Include an expiration date as part of the signature
- Ensure URL integrity and prevent unauthorized modifications
- Easy integration with **Laminas**/**Mezzio** or other PHP-based frameworks

## Installation

Install the package via Composer:

```bash
composer require ucarsolutions/laminas-uri-signer
```

## Tests
Run the tests with PHPUnit:

```bash
vendor/bin/phpunit
```
## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any suggestions or bug reports.

Contribution Guidelines:
1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Write tests for your changes.
4. Make sure all tests pass.
5. Submit a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.
