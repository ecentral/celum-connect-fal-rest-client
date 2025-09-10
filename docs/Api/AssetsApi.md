# Celum\Client\AssetsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetInCollection()**](AssetsApi.md#createAssetInCollection) | **POST** /assets | Create an asset |
| [**deleteAsset()**](AssetsApi.md#deleteAsset) | **DELETE** /assets/{assetId} | Delete an asset by ID |
| [**findAssets()**](AssetsApi.md#findAssets) | **POST** /assets/search | Find all assets matching the complex criteria |
| [**getAsset()**](AssetsApi.md#getAsset) | **GET** /assets/{assetId} | Get an asset by ID |
| [**getAssets()**](AssetsApi.md#getAssets) | **GET** /assets | Get all assets matching the criteria |
| [**updateAsset()**](AssetsApi.md#updateAsset) | **PATCH** /assets/{assetId} | Update an asset by ID |


## `createAssetInCollection()`

```php
createAssetInCollection($create_asset, $x_celum_username): \Celum\Client\Model\Asset
```

Create an asset

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_asset = new \Celum\Client\Model\CreateAsset(); // \Celum\Client\Model\CreateAsset
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->createAssetInCollection($create_asset, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetInCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_asset** | [**\Celum\Client\Model\CreateAsset**](../Model/CreateAsset.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAsset()`

```php
deleteAsset($asset_id, $x_celum_username)
```

Delete an asset by ID

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int | ID of the asset
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $apiInstance->deleteAsset($asset_id, $x_celum_username);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**| ID of the asset | |
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

## `findAssets()`

```php
findAssets($find_assets, $x_celum_username): \Celum\Client\Model\AssetPage
```

Find all assets matching the complex criteria

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_assets = new \Celum\Client\Model\FindAssets(); // \Celum\Client\Model\FindAssets
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->findAssets($find_assets, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->findAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_assets** | [**\Celum\Client\Model\FindAssets**](../Model/FindAssets.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\AssetPage**](../Model/AssetPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsset()`

```php
getAsset($asset_id, $locale, $permissions, $inclusions, $information_fields, $download_formats, $x_celum_username): \Celum\Client\Model\Asset
```

Get an asset by ID

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int | ID of the asset
$locale = en; // string | Locale for localized values
$permissions = array('permissions_example'); // string[] | Specify list of permission that you want evaluated in list format e.g. upload, editName
$inclusions = informationFields,informationFieldPermissions,fileProperties,externalReferences,downloadFormats; // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$download_formats = array(56); // int[] | Specify list of download formats ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getAsset($asset_id, $locale, $permissions, $inclusions, $information_fields, $download_formats, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**| ID of the asset | |
| **locale** | **string**| Locale for localized values | [optional] |
| **permissions** | [**string[]**](../Model/string.md)| Specify list of permission that you want evaluated in list format e.g. upload, editName | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **download_formats** | [**int[]**](../Model/int.md)| Specify list of download formats ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssets()`

```php
getAssets($locale, $parent_id, $search_text, $search_type, $search_operator, $recursive, $page, $size, $sort, $permissions, $inclusions, $information_fields, $download_formats, $x_celum_username): \Celum\Client\Model\AssetPage
```

Get all assets matching the criteria

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = en; // mixed | Locale for localized values
$parent_id = 56; // int | ID of the parent collection to search assets in
$search_text = 'search_text_example'; // string | Phrase or terms to search for
$search_type = phrase; // \Celum\Client\Model\SearchType | Defines how the search text is matched
$search_operator = new \Celum\Client\Model\\Celum\Client\Model\SearchOperator(); // \Celum\Client\Model\SearchOperator | Logical operator using which search terms are combined
$recursive = false; // bool | If elements in the given collection should be searched for recursively
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$sort = id,ASC; // string[] | Sorting of the results to return (format: field,order) <br/>Examples: id,ASC | id,DESC <br/>Valid field values for assets: id | name | currentVersion.filename | currentVersion.filesize | currentVersion.fileCategory | creation.date | modification.date | creation.userId | modification.userId | currentVersion.fileExtension | informationField.[id] | informationField.[id].[locale]<br/>Valid field values for collections: id | name | creation.date | modification.date | creation.userId | modification.userId
$permissions = array('permissions_example'); // string[] | Specify list of permission that you want evaluated in list format e.g. upload, editName
$inclusions = array('inclusions_example'); // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$download_formats = array(56); // int[] | Specify list of download formats ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getAssets($locale, $parent_id, $search_text, $search_type, $search_operator, $recursive, $page, $size, $sort, $permissions, $inclusions, $information_fields, $download_formats, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | [**mixed**](../Model/.md)| Locale for localized values | [optional] |
| **parent_id** | **int**| ID of the parent collection to search assets in | [optional] |
| **search_text** | **string**| Phrase or terms to search for | [optional] |
| **search_type** | [**\Celum\Client\Model\SearchType**](../Model/.md)| Defines how the search text is matched | [optional] |
| **search_operator** | [**\Celum\Client\Model\SearchOperator**](../Model/.md)| Logical operator using which search terms are combined | [optional] |
| **recursive** | **bool**| If elements in the given collection should be searched for recursively | [optional] [default to false] |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **sort** | [**string[]**](../Model/string.md)| Sorting of the results to return (format: field,order) &lt;br/&gt;Examples: id,ASC | id,DESC &lt;br/&gt;Valid field values for assets: id | name | currentVersion.filename | currentVersion.filesize | currentVersion.fileCategory | creation.date | modification.date | creation.userId | modification.userId | currentVersion.fileExtension | informationField.[id] | informationField.[id].[locale]&lt;br/&gt;Valid field values for collections: id | name | creation.date | modification.date | creation.userId | modification.userId | [optional] |
| **permissions** | [**string[]**](../Model/string.md)| Specify list of permission that you want evaluated in list format e.g. upload, editName | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **download_formats** | [**int[]**](../Model/int.md)| Specify list of download formats ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\AssetPage**](../Model/AssetPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAsset()`

```php
updateAsset($asset_id, $update_asset, $x_celum_username): \Celum\Client\Model\Asset
```

Update an asset by ID

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



$apiInstance = new Celum\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 56; // int | ID of the asset
$update_asset = new \Celum\Client\Model\UpdateAsset(); // \Celum\Client\Model\UpdateAsset
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->updateAsset($asset_id, $update_asset, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **int**| ID of the asset | |
| **update_asset** | [**\Celum\Client\Model\UpdateAsset**](../Model/UpdateAsset.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
