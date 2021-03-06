# SwaggerClient-php - DEPRECATED
API de gerenciamento de pedidos da LIO.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
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

// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');
// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $api_instance->orderAddItem($client_id, $access_token, $merchant_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderAddItem: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cielo.com.br/sandbox-lio/order-management/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderManagementApi* | [**orderAddItem**](docs/Api/OrderManagementApi.md#orderadditem) | **POST** /orders/{id}/items | 
*OrderManagementApi* | [**orderCreate**](docs/Api/OrderManagementApi.md#ordercreate) | **POST** /orders | 
*OrderManagementApi* | [**orderDelete**](docs/Api/OrderManagementApi.md#orderdelete) | **DELETE** /orders/{id} | 
*OrderManagementApi* | [**orderDeleteItem**](docs/Api/OrderManagementApi.md#orderdeleteitem) | **DELETE** /orders/{id}/items/{itemId} | 
*OrderManagementApi* | [**orderGet**](docs/Api/OrderManagementApi.md#orderget) | **GET** /orders/{id} | 
*OrderManagementApi* | [**orderGetByParameters**](docs/Api/OrderManagementApi.md#ordergetbyparameters) | **GET** /orders | 
*OrderManagementApi* | [**orderGetItem**](docs/Api/OrderManagementApi.md#ordergetitem) | **GET** /orders/{id}/items | 
*OrderManagementApi* | [**orderGetTransactions**](docs/Api/OrderManagementApi.md#ordergettransactions) | **GET** /orders/{id}/transactions | 
*OrderManagementApi* | [**orderUpdate**](docs/Api/OrderManagementApi.md#orderupdate) | **PUT** /orders/{id} | 
*OrderManagementApi* | [**orderUpdateItem**](docs/Api/OrderManagementApi.md#orderupdateitem) | **PUT** /orders/{id}/items/{itemId} | 


## Documentation For Models

 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [Card](docs/Model/Card.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [Order](docs/Model/Order.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrdersCard](docs/Model/OrdersCard.md)
 - [OrdersItems](docs/Model/OrdersItems.md)
 - [OrdersPaymentProduct](docs/Model/OrdersPaymentProduct.md)
 - [OrdersPaymentProductSub](docs/Model/OrdersPaymentProductSub.md)
 - [OrdersTransactions](docs/Model/OrdersTransactions.md)
 - [PaymentProduct](docs/Model/PaymentProduct.md)
 - [Response](docs/Model/Response.md)
 - [SubPaymentProduct](docs/Model/SubPaymentProduct.md)
 - [Transaction](docs/Model/Transaction.md)


## Documentation For Authorization


## access-token

- **Type**: API key
- **API key parameter name**: access-token
- **Location**: HTTP header

## client-id

- **Type**: API key
- **API key parameter name**: client-id
- **Location**: HTTP header

## merchant-id

- **Type**: API key
- **API key parameter name**: merchant-id
- **Location**: HTTP header


## Author




