# cloudmersive_document_convert_api_client
Convert API lets you effortlessly convert file formats and types.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Package version: 1.4.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_document_convert_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_document_convert_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_document_convert_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompareDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->compareDocumentDocx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareDocumentApi->compareDocumentDocx: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompareDocumentApi* | [**compareDocumentDocx**](docs/Api/CompareDocumentApi.md#comparedocumentdocx) | **POST** /convert/compare/docx | Compare Two Word DOCX
*ConvertDataApi* | [**convertDataCsvToJson**](docs/Api/ConvertDataApi.md#convertdatacsvtojson) | **POST** /convert/csv/to/json | CSV to JSON conversion
*ConvertDataApi* | [**convertDataXmlToJson**](docs/Api/ConvertDataApi.md#convertdataxmltojson) | **POST** /convert/xml/to/json | XML to JSON conversion
*ConvertDocumentApi* | [**convertDocumentAutodetectToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttopdf) | **POST** /convert/autodetect/to/pdf | Convert Document to PDF
*ConvertDocumentApi* | [**convertDocumentCsvToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentcsvtoxlsx) | **POST** /convert/csv/to/xlsx | CSV to Excel XLSX
*ConvertDocumentApi* | [**convertDocumentDocToDocx**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctodocx) | **POST** /convert/doc/to/docx | Word DOC (97-03) to DOCX
*ConvertDocumentApi* | [**convertDocumentDocToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctopdf) | **POST** /convert/doc/to/pdf | Word DOC (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentDocxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdocxtopdf) | **POST** /convert/docx/to/pdf | Word DOCX to PDF
*ConvertDocumentApi* | [**convertDocumentPdfToPngArray**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopngarray) | **POST** /convert/pdf/to/png | PDF to PNG Array
*ConvertDocumentApi* | [**convertDocumentPptToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopdf) | **POST** /convert/ppt/to/pdf | PowerPoint PPT (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentPptToPptx**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopptx) | **POST** /convert/ppt/to/pptx | PowerPoint PPT (97-03) to PPTX
*ConvertDocumentApi* | [**convertDocumentPptxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentpptxtopdf) | **POST** /convert/pptx/to/pdf | PowerPoint PPTX to PDF
*ConvertDocumentApi* | [**convertDocumentXlsToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstopdf) | **POST** /convert/xls/to/pdf | Excel XLS (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentXlsToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstoxlsx) | **POST** /convert/xls/to/xlsx | Excel XLS (97-03) to XLSX
*ConvertDocumentApi* | [**convertDocumentXlsxToCsv**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtocsv) | **POST** /convert/xlsx/to/csv | Excel XLSX to CSV
*ConvertDocumentApi* | [**convertDocumentXlsxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtopdf) | **POST** /convert/xlsx/to/pdf | Excel XLSX to PDF
*ConvertImageApi* | [**convertImageImageFormatConvert**](docs/Api/ConvertImageApi.md#convertimageimageformatconvert) | **POST** /convert/image/{format1}/to/{format2} | Image format conversion
*ConvertTemplateApi* | [**convertTemplateApplyHtmlTemplate**](docs/Api/ConvertTemplateApi.md#converttemplateapplyhtmltemplate) | **POST** /convert/template/html/apply | Apply HTML template
*ConvertWebApi* | [**convertWebHtmlToDocx**](docs/Api/ConvertWebApi.md#convertwebhtmltodocx) | **POST** /convert/html/to/docx | HTML to DOCX
*ConvertWebApi* | [**convertWebHtmlToPdf**](docs/Api/ConvertWebApi.md#convertwebhtmltopdf) | **POST** /convert/web/html/to/pdf | Convert HTML string to PDF
*ConvertWebApi* | [**convertWebMdToHtml**](docs/Api/ConvertWebApi.md#convertwebmdtohtml) | **POST** /convert/web/md/to/html | Convert Markdown to HTML
*ConvertWebApi* | [**convertWebUrlToPdf**](docs/Api/ConvertWebApi.md#convertweburltopdf) | **POST** /convert/web/url/to/pdf | Convert a URL to PDF
*ConvertWebApi* | [**convertWebUrlToScreenshot**](docs/Api/ConvertWebApi.md#convertweburltoscreenshot) | **POST** /convert/web/url/to/screenshot | Take screenshot of URL
*EditDocumentApi* | [**editDocumentBeginEditing**](docs/Api/EditDocumentApi.md#editdocumentbeginediting) | **POST** /convert/edit/begin-editing | Begin editing a document
*EditDocumentApi* | [**editDocumentDocxReplace**](docs/Api/EditDocumentApi.md#editdocumentdocxreplace) | **POST** /convert/edit/docx/replace-all | Replace string in DOCX
*EditDocumentApi* | [**editDocumentPptxReplace**](docs/Api/EditDocumentApi.md#editdocumentpptxreplace) | **POST** /convert/edit/pptx/replace-all | Replace string in PPTX
*MergeDocumentApi* | [**mergeDocumentDocx**](docs/Api/MergeDocumentApi.md#mergedocumentdocx) | **POST** /convert/merge/docx | Merge Multple Word DOCX Together
*MergeDocumentApi* | [**mergeDocumentPptx**](docs/Api/MergeDocumentApi.md#mergedocumentpptx) | **POST** /convert/merge/pptx | Merge Multple PowerPoint PPTX Together
*MergeDocumentApi* | [**mergeDocumentXlsx**](docs/Api/MergeDocumentApi.md#mergedocumentxlsx) | **POST** /convert/merge/xlsx | Merge Multple Excel XLSX Together
*ViewerToolsApi* | [**viewerToolsCreateSimple**](docs/Api/ViewerToolsApi.md#viewertoolscreatesimple) | **POST** /convert/viewer/create/web/simple | Create a web-based viewer


## Documentation For Models

 - [ConvertedPngPage](docs/Model/ConvertedPngPage.md)
 - [HtmlMdResult](docs/Model/HtmlMdResult.md)
 - [HtmlTemplateApplicationRequest](docs/Model/HtmlTemplateApplicationRequest.md)
 - [HtmlTemplateApplicationResponse](docs/Model/HtmlTemplateApplicationResponse.md)
 - [HtmlTemplateOperation](docs/Model/HtmlTemplateOperation.md)
 - [HtmlToOfficeRequest](docs/Model/HtmlToOfficeRequest.md)
 - [HtmlToPdfRequest](docs/Model/HtmlToPdfRequest.md)
 - [PdfToPngResult](docs/Model/PdfToPngResult.md)
 - [ReplaceStringRequest](docs/Model/ReplaceStringRequest.md)
 - [ScreenshotRequest](docs/Model/ScreenshotRequest.md)
 - [ViewerResponse](docs/Model/ViewerResponse.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




