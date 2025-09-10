# Celum\Client\VersionsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addVersion()**](VersionsApi.md#addVersion) | **POST** /assets/{assetId}/versions | Add a new version to an asset identified by the asset ID |
| [**deleteVersion()**](VersionsApi.md#deleteVersion) | **DELETE** /assets/{assetId}/versions/{versionId} | Delete a version of an asset identified by the asset ID and version ID |
| [**getVersions()**](VersionsApi.md#getVersions) | **GET** /assets/{assetId}/versions | Get all versions of an asset identified by the asset ID |


## `addVersion()`

```php
addVersion($asset_id, $add_version, $x_celum_username): \Celum\Client\Model\Version
```

Add a new version to an asset identified by the asset ID

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



$apiInstance = new Celum\Client\Api\VersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int
$add_version = new \Celum\Client\Model\AddVersion(); // \Celum\Client\Model\AddVersion
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->addVersion($asset_id, $add_version, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->addVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**|  | |
| **add_version** | [**\Celum\Client\Model\AddVersion**](../Model/AddVersion.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Version**](../Model/Version.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVersion()`

```php
deleteVersion($asset_id, $version_id, $x_celum_username)
```

Delete a version of an asset identified by the asset ID and version ID

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



$apiInstance = new Celum\Client\Api\VersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int | ID of the asset
$version_id = 56; // int | The version ID of a version of an asset
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $apiInstance->deleteVersion($asset_id, $version_id, $x_celum_username);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**| ID of the asset | |
| **version_id** | **int**| The version ID of a version of an asset | |
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

## `getVersions()`

```php
getVersions($asset_id, $page, $size, $x_celum_username): \Celum\Client\Model\VersionPage
```

Get all versions of an asset identified by the asset ID

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



$apiInstance = new Celum\Client\Api\VersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getVersions($asset_id, $page, $size, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->getVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**|  | |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\VersionPage**](../Model/VersionPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
