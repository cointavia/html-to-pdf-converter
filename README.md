
Convert any HTML content / code into PDF file very easy.
==========

## Please visit [Cointavia PDF Generator](https://pdf.cointavia.com) for more information:
- [Installation & Configuration](https://pdf.cointavia.com/composer)
- [Basic Testing](https://pdf.cointavia.com/testing)
- [Using Swagger UI](https://pdf.cointavia.com/api/documentation)
- [Tips](https://cointavia.com)

## Support
- [Wiki](https://github.com/cointavia/html-to-pdf-converter/wiki/Cointavia-HTML-to-PDF-Convertor)
- [Extra Features](https://github.com/cointavia)



## Getting Started

### Installation
The CointaviaPDF Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`cointavia/html-to-pdf-converter` package.

```sh
composer require cointavia/html-to-pdf-converter
```

Then run a composer update
```sh
composer update
```

To use the CointaviaPDF Service Provider, you must register the provider when bootstrapping your application.


### Configuration


To customize the configuration file, publish the package configuration using Artisan.

```sh
php artisan vendor:publish --provider="Cointavia\PDF\CointaviaPDFServiceProvider"
```

The settings can be found in the generated `config/cointavia-pdf.php` configuration file. 

```php
return [
    'auth_token' => 'abc123',
    'user_token' => 'user123'
];
```


### Disclaimer
All rights reserved [@cointavia](https://pdf.cointavia.com/)