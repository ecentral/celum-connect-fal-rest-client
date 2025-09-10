# Celum\Client\DefaultApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**handleASSETADDED()**](DefaultApi.md#handleASSETADDED) | **POST** /ASSET_ADDED | Handle asset added |
| [**handleASSETCREATED()**](DefaultApi.md#handleASSETCREATED) | **POST** /ASSET_CREATED | Handle asset created |
| [**handleASSETDELETED()**](DefaultApi.md#handleASSETDELETED) | **POST** /ASSET_DELETED | Handle asset deleted |
| [**handleASSETRELEASED()**](DefaultApi.md#handleASSETRELEASED) | **POST** /ASSET_RELEASED | Handle asset released |
| [**handleASSETREMOVED()**](DefaultApi.md#handleASSETREMOVED) | **POST** /ASSET_REMOVED | Handle asset removed |
| [**handleASSETUPDATED()**](DefaultApi.md#handleASSETUPDATED) | **POST** /ASSET_UPDATED | Handle asset updated |
| [**handleASSETVERSIONACTIVATED()**](DefaultApi.md#handleASSETVERSIONACTIVATED) | **POST** /ASSET_VERSION_ACTIVATED | Handle asset version activated |
| [**handleASSETVERSIONADDED()**](DefaultApi.md#handleASSETVERSIONADDED) | **POST** /ASSET_VERSION_ADDED | Handle asset version added |
| [**handleASSETVERSIONDELETED()**](DefaultApi.md#handleASSETVERSIONDELETED) | **POST** /ASSET_VERSION_DELETED | Handle asset version deleted |
| [**handleCOLLECTIONCREATED()**](DefaultApi.md#handleCOLLECTIONCREATED) | **POST** /COLLECTION_CREATED | Handle collection created |
| [**handleCOLLECTIONDELETED()**](DefaultApi.md#handleCOLLECTIONDELETED) | **POST** /COLLECTION_DELETED | Handle collection deleted |
| [**handleCOLLECTIONMOVED()**](DefaultApi.md#handleCOLLECTIONMOVED) | **POST** /COLLECTION_MOVED | Handle collection moved |
| [**handleCOLLECTIONUPDATED()**](DefaultApi.md#handleCOLLECTIONUPDATED) | **POST** /COLLECTION_UPDATED | Handle collection updated |
| [**handleEXTERNALREFERENCEADDED()**](DefaultApi.md#handleEXTERNALREFERENCEADDED) | **POST** /EXTERNAL_REFERENCE_ADDED | Handle external reference added |
| [**handleEXTERNALREFERENCEDELETED()**](DefaultApi.md#handleEXTERNALREFERENCEDELETED) | **POST** /EXTERNAL_REFERENCE_DELETED | Handle external reference deleted |
| [**handlePREVIEWCONVERSION()**](DefaultApi.md#handlePREVIEWCONVERSION) | **POST** /PREVIEW_CONVERSION | Handle preview conversion |
| [**handleRELATIONCREATED()**](DefaultApi.md#handleRELATIONCREATED) | **POST** /RELATION_CREATED | Handle relation created |
| [**handleRELATIONDELETED()**](DefaultApi.md#handleRELATIONDELETED) | **POST** /RELATION_DELETED | Handle relation deleted |


## `handleASSETADDED()`

```php
handleASSETADDED($asset_added_event)
```

Handle asset added

Fired when asset added

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_added_event = new \Celum\Client\Model\AssetAddedEvent(); // \Celum\Client\Model\AssetAddedEvent

try {
    $apiInstance->handleASSETADDED($asset_added_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETADDED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_added_event** | [**\Celum\Client\Model\AssetAddedEvent**](../Model/AssetAddedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETCREATED()`

```php
handleASSETCREATED($asset_created_event)
```

Handle asset created

Fired when asset created

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_created_event = new \Celum\Client\Model\AssetCreatedEvent(); // \Celum\Client\Model\AssetCreatedEvent

try {
    $apiInstance->handleASSETCREATED($asset_created_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETCREATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_created_event** | [**\Celum\Client\Model\AssetCreatedEvent**](../Model/AssetCreatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETDELETED()`

```php
handleASSETDELETED($asset_deleted_event)
```

Handle asset deleted

Fired when asset deleted

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_deleted_event = new \Celum\Client\Model\AssetDeletedEvent(); // \Celum\Client\Model\AssetDeletedEvent

try {
    $apiInstance->handleASSETDELETED($asset_deleted_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETDELETED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_deleted_event** | [**\Celum\Client\Model\AssetDeletedEvent**](../Model/AssetDeletedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETRELEASED()`

```php
handleASSETRELEASED($asset_released_event)
```

Handle asset released

Fired when asset released

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_released_event = new \Celum\Client\Model\AssetReleasedEvent(); // \Celum\Client\Model\AssetReleasedEvent

try {
    $apiInstance->handleASSETRELEASED($asset_released_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETRELEASED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_released_event** | [**\Celum\Client\Model\AssetReleasedEvent**](../Model/AssetReleasedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETREMOVED()`

```php
handleASSETREMOVED($asset_removed_event)
```

Handle asset removed

Fired when asset removed

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_removed_event = new \Celum\Client\Model\AssetRemovedEvent(); // \Celum\Client\Model\AssetRemovedEvent

try {
    $apiInstance->handleASSETREMOVED($asset_removed_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETREMOVED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_removed_event** | [**\Celum\Client\Model\AssetRemovedEvent**](../Model/AssetRemovedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETUPDATED()`

```php
handleASSETUPDATED($asset_updated_event)
```

Handle asset updated

Fired when asset updated

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_updated_event = new \Celum\Client\Model\AssetUpdatedEvent(); // \Celum\Client\Model\AssetUpdatedEvent

try {
    $apiInstance->handleASSETUPDATED($asset_updated_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETUPDATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_updated_event** | [**\Celum\Client\Model\AssetUpdatedEvent**](../Model/AssetUpdatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETVERSIONACTIVATED()`

```php
handleASSETVERSIONACTIVATED($asset_version_activated_event)
```

Handle asset version activated

Fired when asset version activated

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_version_activated_event = new \Celum\Client\Model\AssetVersionActivatedEvent(); // \Celum\Client\Model\AssetVersionActivatedEvent

try {
    $apiInstance->handleASSETVERSIONACTIVATED($asset_version_activated_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETVERSIONACTIVATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_version_activated_event** | [**\Celum\Client\Model\AssetVersionActivatedEvent**](../Model/AssetVersionActivatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETVERSIONADDED()`

```php
handleASSETVERSIONADDED($asset_version_added_event)
```

Handle asset version added

Fired when asset version added

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_version_added_event = new \Celum\Client\Model\AssetVersionAddedEvent(); // \Celum\Client\Model\AssetVersionAddedEvent

try {
    $apiInstance->handleASSETVERSIONADDED($asset_version_added_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETVERSIONADDED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_version_added_event** | [**\Celum\Client\Model\AssetVersionAddedEvent**](../Model/AssetVersionAddedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleASSETVERSIONDELETED()`

```php
handleASSETVERSIONDELETED($asset_version_deleted_event)
```

Handle asset version deleted

Fired when asset version deleted

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_version_deleted_event = new \Celum\Client\Model\AssetVersionDeletedEvent(); // \Celum\Client\Model\AssetVersionDeletedEvent

try {
    $apiInstance->handleASSETVERSIONDELETED($asset_version_deleted_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleASSETVERSIONDELETED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_version_deleted_event** | [**\Celum\Client\Model\AssetVersionDeletedEvent**](../Model/AssetVersionDeletedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleCOLLECTIONCREATED()`

```php
handleCOLLECTIONCREATED($collection_created_event)
```

Handle collection created

Fired when collection created

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_created_event = new \Celum\Client\Model\CollectionCreatedEvent(); // \Celum\Client\Model\CollectionCreatedEvent

try {
    $apiInstance->handleCOLLECTIONCREATED($collection_created_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleCOLLECTIONCREATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_created_event** | [**\Celum\Client\Model\CollectionCreatedEvent**](../Model/CollectionCreatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleCOLLECTIONDELETED()`

```php
handleCOLLECTIONDELETED($collection_deleted_event)
```

Handle collection deleted

Fired when collection deleted

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_deleted_event = new \Celum\Client\Model\CollectionDeletedEvent(); // \Celum\Client\Model\CollectionDeletedEvent

try {
    $apiInstance->handleCOLLECTIONDELETED($collection_deleted_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleCOLLECTIONDELETED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_deleted_event** | [**\Celum\Client\Model\CollectionDeletedEvent**](../Model/CollectionDeletedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleCOLLECTIONMOVED()`

```php
handleCOLLECTIONMOVED($collection_moved_event)
```

Handle collection moved

Fired when collection moved

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_moved_event = new \Celum\Client\Model\CollectionMovedEvent(); // \Celum\Client\Model\CollectionMovedEvent

try {
    $apiInstance->handleCOLLECTIONMOVED($collection_moved_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleCOLLECTIONMOVED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_moved_event** | [**\Celum\Client\Model\CollectionMovedEvent**](../Model/CollectionMovedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleCOLLECTIONUPDATED()`

```php
handleCOLLECTIONUPDATED($collection_updated_event)
```

Handle collection updated

Fired when collection updated

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_updated_event = new \Celum\Client\Model\CollectionUpdatedEvent(); // \Celum\Client\Model\CollectionUpdatedEvent

try {
    $apiInstance->handleCOLLECTIONUPDATED($collection_updated_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleCOLLECTIONUPDATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_updated_event** | [**\Celum\Client\Model\CollectionUpdatedEvent**](../Model/CollectionUpdatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleEXTERNALREFERENCEADDED()`

```php
handleEXTERNALREFERENCEADDED($external_reference_added_event)
```

Handle external reference added

Fired when external reference added

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_reference_added_event = new \Celum\Client\Model\ExternalReferenceAddedEvent(); // \Celum\Client\Model\ExternalReferenceAddedEvent

try {
    $apiInstance->handleEXTERNALREFERENCEADDED($external_reference_added_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleEXTERNALREFERENCEADDED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_reference_added_event** | [**\Celum\Client\Model\ExternalReferenceAddedEvent**](../Model/ExternalReferenceAddedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleEXTERNALREFERENCEDELETED()`

```php
handleEXTERNALREFERENCEDELETED($external_reference_deleted_event)
```

Handle external reference deleted

Fired when external reference deleted

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_reference_deleted_event = new \Celum\Client\Model\ExternalReferenceDeletedEvent(); // \Celum\Client\Model\ExternalReferenceDeletedEvent

try {
    $apiInstance->handleEXTERNALREFERENCEDELETED($external_reference_deleted_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleEXTERNALREFERENCEDELETED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_reference_deleted_event** | [**\Celum\Client\Model\ExternalReferenceDeletedEvent**](../Model/ExternalReferenceDeletedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handlePREVIEWCONVERSION()`

```php
handlePREVIEWCONVERSION($preview_conversion_event)
```

Handle preview conversion

Fired when preview conversion

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preview_conversion_event = new \Celum\Client\Model\PreviewConversionEvent(); // \Celum\Client\Model\PreviewConversionEvent

try {
    $apiInstance->handlePREVIEWCONVERSION($preview_conversion_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handlePREVIEWCONVERSION: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preview_conversion_event** | [**\Celum\Client\Model\PreviewConversionEvent**](../Model/PreviewConversionEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleRELATIONCREATED()`

```php
handleRELATIONCREATED($relation_created_event)
```

Handle relation created

Fired when relation created

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_created_event = new \Celum\Client\Model\RelationCreatedEvent(); // \Celum\Client\Model\RelationCreatedEvent

try {
    $apiInstance->handleRELATIONCREATED($relation_created_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleRELATIONCREATED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_created_event** | [**\Celum\Client\Model\RelationCreatedEvent**](../Model/RelationCreatedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleRELATIONDELETED()`

```php
handleRELATIONDELETED($relation_deleted_event)
```

Handle relation deleted

Fired when relation deleted

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



$apiInstance = new Celum\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_deleted_event = new \Celum\Client\Model\RelationDeletedEvent(); // \Celum\Client\Model\RelationDeletedEvent

try {
    $apiInstance->handleRELATIONDELETED($relation_deleted_event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->handleRELATIONDELETED: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_deleted_event** | [**\Celum\Client\Model\RelationDeletedEvent**](../Model/RelationDeletedEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
