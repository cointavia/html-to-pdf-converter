
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
    'auth_token' => '**********',
    'user_token' => '**********'
];
```


### Usage
You can create a new CointaviaPDF instance and load a HTML string, file or view name. You can save it to a file, or stream (show in browser) or download.

Use the facade in Controller or Service:

```php
use CointaviaPDF;
```

then

```php
$fileName = "Sample File";
$HTMLData = "<h1>Hello</h1><p>World</p>";

$pdfFile = CointaviaPDF::generatePDF($fileName,$HTMLData);
```

With successfull request Cointavia Api will return

```json
{
    "status": 200,
    "success": {
        "filePath": "path-To-Download-PDF"
    }
}
```

### Disclaimer
All rights reserved [@cointavia](https://pdf.cointavia.com/)