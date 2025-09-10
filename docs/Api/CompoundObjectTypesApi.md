# Celum\Client\CompoundObjectTypesApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompoundType()**](CompoundObjectTypesApi.md#getCompoundType) | **GET** /compound-types/{compoundTypeKey} | Get a compound object type by business key |
| [**getCompoundTypes()**](CompoundObjectTypesApi.md#getCompoundTypes) | **GET** /compound-types | Get all compound object types |


## `getCompoundType()`

```php
getCompoundType($compound_type_key, $with_elements, $x_celum_username): \Celum\Client\Model\CompoundTypeInformation
```

Get a compound object type by business key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = Celum\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');



$apiInstance = new Celum\Client\Api\CompoundObjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$compound_type_key = 'compound_type_key_example'; // string | Unique business key of the compound object type
$with_elements = false; // bool | Include all the elements of the compound object type
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getCompoundType($compound_type_key, $with_elements, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompoundObjectTypesApi->getCompoundType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **compound_type_key** | **string**| Unique business key of the compound object type | |
| **with_elements** | **bool**| Include all the elements of the compound object type | [optional] [default to false] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\CompoundTypeInformation**](../Model/CompoundTypeInformation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompoundTypes()`

```php
getCompoundTypes($x_celum_username): \Celum\Client\Model\CompoundObjectType[]
```

Get all compound object types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = Celum\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');



$apiInstance = new Celum\Client\Api\CompoundObjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getCompoundTypes($x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompoundObjectTypesApi->getCompoundTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\CompoundObjectType[]**](../Model/CompoundObjectType.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
