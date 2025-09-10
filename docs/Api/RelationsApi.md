# Celum\Client\RelationsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRelation()**](RelationsApi.md#createRelation) | **POST** /relations | Create a relation |
| [**deleteRelation()**](RelationsApi.md#deleteRelation) | **DELETE** /relations/{relationId} | Delete a relation by ID |
| [**getRelationById()**](RelationsApi.md#getRelationById) | **GET** /relations/{relationId} | Get a relation by ID |
| [**getRelations()**](RelationsApi.md#getRelations) | **GET** /relations | Get all relations matching the criteria |
| [**updateRelation()**](RelationsApi.md#updateRelation) | **PATCH** /relations/{relationId} | Update a relation |


## `createRelation()`

```php
createRelation($create_relation, $x_celum_username): \Celum\Client\Model\Relation
```

Create a relation

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



$apiInstance = new Celum\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_relation = new \Celum\Client\Model\CreateRelation(); // \Celum\Client\Model\CreateRelation
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->createRelation($create_relation, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->createRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_relation** | [**\Celum\Client\Model\CreateRelation**](../Model/CreateRelation.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Relation**](../Model/Relation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRelation()`

```php
deleteRelation($relation_id, $x_celum_username)
```

Delete a relation by ID

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



$apiInstance = new Celum\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | ID of relation
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $apiInstance->deleteRelation($relation_id, $x_celum_username);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->deleteRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| ID of relation | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRelationById()`

```php
getRelationById($relation_id, $locale, $inclusions, $information_fields, $x_celum_username): \Celum\Client\Model\Relation
```

Get a relation by ID

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



$apiInstance = new Celum\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | ID of relation
$locale = en; // mixed | Locale for localized values
$inclusions = array('inclusions_example'); // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getRelationById($relation_id, $locale, $inclusions, $information_fields, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->getRelationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| ID of relation | |
| **locale** | [**mixed**](../Model/.md)| Locale for localized values | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Relation**](../Model/Relation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRelations()`

```php
getRelations($asset_id, $locale, $type_id, $version_id, $direction, $page, $size, $inclusions, $information_fields, $x_celum_username): \Celum\Client\Model\RelationPage
```

Get all relations matching the criteria

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



$apiInstance = new Celum\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 1; // int | ID of the asset
$locale = en; // mixed | Locale for localized values
$type_id = 1; // int | Type ID of a relation,
$version_id = 0; // int | Version ID of a relation,
$direction = SOURCE_TO_TARGET; // string | Direction type of a relation
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$inclusions = array('inclusions_example'); // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getRelations($asset_id, $locale, $type_id, $version_id, $direction, $page, $size, $inclusions, $information_fields, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->getRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**| ID of the asset | |
| **locale** | [**mixed**](../Model/.md)| Locale for localized values | [optional] |
| **type_id** | **int**| Type ID of a relation, | [optional] |
| **version_id** | **int**| Version ID of a relation, | [optional] |
| **direction** | **string**| Direction type of a relation | [optional] |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\RelationPage**](../Model/RelationPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRelation()`

```php
updateRelation($relation_id, $update_relation, $x_celum_username): \Celum\Client\Model\Relation
```

Update a relation

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



$apiInstance = new Celum\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | ID of relation
$update_relation = new \Celum\Client\Model\UpdateRelation(); // \Celum\Client\Model\UpdateRelation
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->updateRelation($relation_id, $update_relation, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->updateRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| ID of relation | |
| **update_relation** | [**\Celum\Client\Model\UpdateRelation**](../Model/UpdateRelation.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Relation**](../Model/Relation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
