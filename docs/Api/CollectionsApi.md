# Celum\Client\CollectionsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCollection()**](CollectionsApi.md#createCollection) | **POST** /collections | Create a collection |
| [**deleteCollection()**](CollectionsApi.md#deleteCollection) | **DELETE** /collections/{collectionId} | Delete a collection by ID |
| [**findCollections()**](CollectionsApi.md#findCollections) | **POST** /collections/search | Get all collections matching the criteria |
| [**getCollection()**](CollectionsApi.md#getCollection) | **GET** /collections/{collectionId} | Get a collection by ID |
| [**getCollections()**](CollectionsApi.md#getCollections) | **GET** /collections | Get all collections matching the criteria |
| [**updateCollection()**](CollectionsApi.md#updateCollection) | **PATCH** /collections/{collectionId} | Update a collection |


## `createCollection()`

```php
createCollection($create_collection, $x_celum_username): \Celum\Client\Model\Collection
```

Create a collection

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_collection = new \Celum\Client\Model\CreateCollection(); // \Celum\Client\Model\CreateCollection
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->createCollection($create_collection, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_collection** | [**\Celum\Client\Model\CreateCollection**](../Model/CreateCollection.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCollection()`

```php
deleteCollection($collection_id, $x_celum_username)
```

Delete a collection by ID

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 56; // int | ID of the collection
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $apiInstance->deleteCollection($collection_id, $x_celum_username);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **int**| ID of the collection | |
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

## `findCollections()`

```php
findCollections($find_collections, $x_celum_username): \Celum\Client\Model\CollectionPage
```

Get all collections matching the criteria

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_collections = new \Celum\Client\Model\FindCollections(); // \Celum\Client\Model\FindCollections
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->findCollections($find_collections, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_collections** | [**\Celum\Client\Model\FindCollections**](../Model/FindCollections.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\CollectionPage**](../Model/CollectionPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollection()`

```php
getCollection($collection_id, $locale, $include_compound_info, $permissions, $inclusions, $information_fields, $x_celum_username): \Celum\Client\Model\Collection
```

Get a collection by ID

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 56; // int | ID of the collection
$locale = en; // string | Locale for localized values
$include_compound_info = false; // bool | Include compound object information
$permissions = array('permissions_example'); // string[] | Specify list of permission that you want evaluated in list format e.g. upload, editName   <b>Note:</b> \"addNode\" permission is deprecated and will be removed in future versions. Please use \"addCollection\" instead.
$inclusions = informationFields,informationFieldPermissions,roleAssignments; // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getCollection($collection_id, $locale, $include_compound_info, $permissions, $inclusions, $information_fields, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **int**| ID of the collection | |
| **locale** | **string**| Locale for localized values | [optional] |
| **include_compound_info** | **bool**| Include compound object information | [optional] [default to false] |
| **permissions** | [**string[]**](../Model/string.md)| Specify list of permission that you want evaluated in list format e.g. upload, editName   &lt;b&gt;Note:&lt;/b&gt; \&quot;addNode\&quot; permission is deprecated and will be removed in future versions. Please use \&quot;addCollection\&quot; instead. | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollections()`

```php
getCollections($locale, $parent_id, $type_id, $permission_defining_only, $ids, $search_text, $search_type, $search_operator, $recursive, $compound_search_type, $compound_types, $page, $size, $sort, $permissions, $inclusions, $information_fields, $x_celum_username): \Celum\Client\Model\CollectionPage
```

Get all collections matching the criteria

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = en; // mixed | Locale for localized values
$parent_id = 56; // int | ID of the parent collection to search assets in
$type_id = 56; // int | ID of the collection Type
$permission_defining_only = false; // bool | Include permission defining collections only
$ids = array(56); // int[] | IDs of the collections
$search_text = 'search_text_example'; // string | Phrase or terms to search for
$search_type = phrase; // \Celum\Client\Model\SearchType | Defines how the search text is matched
$search_operator = new \Celum\Client\Model\\Celum\Client\Model\SearchOperator(); // \Celum\Client\Model\SearchOperator | Logical operator using which search terms are combined
$recursive = false; // bool | If elements in the given collection should be searched for recursively
$compound_search_type = none; // \Celum\Client\Model\CompoundSearchType | Defines how the search for compound collection is matched
$compound_types = array('compound_types_example'); // string[] | Compound types of the collections
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$sort = id,asc; // string[] | Sorting of the results to return
$permissions = upload; // string[] | Specify list of permission that you want evaluated in list format e.g. upload, editName   <b>Note:</b> \"addNode\" permission is deprecated and will be removed in future versions. Please use \"addCollection\" instead.
$inclusions = array('inclusions_example'); // string[] | Specify list of inclusions that you want evaluated in list format
$information_fields = array(56); // int[] | Specify list of information fields ids
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getCollections($locale, $parent_id, $type_id, $permission_defining_only, $ids, $search_text, $search_type, $search_operator, $recursive, $compound_search_type, $compound_types, $page, $size, $sort, $permissions, $inclusions, $information_fields, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | [**mixed**](../Model/.md)| Locale for localized values | [optional] |
| **parent_id** | **int**| ID of the parent collection to search assets in | [optional] |
| **type_id** | **int**| ID of the collection Type | [optional] |
| **permission_defining_only** | **bool**| Include permission defining collections only | [optional] [default to false] |
| **ids** | [**int[]**](../Model/int.md)| IDs of the collections | [optional] |
| **search_text** | **string**| Phrase or terms to search for | [optional] |
| **search_type** | [**\Celum\Client\Model\SearchType**](../Model/.md)| Defines how the search text is matched | [optional] |
| **search_operator** | [**\Celum\Client\Model\SearchOperator**](../Model/.md)| Logical operator using which search terms are combined | [optional] |
| **recursive** | **bool**| If elements in the given collection should be searched for recursively | [optional] [default to false] |
| **compound_search_type** | [**\Celum\Client\Model\CompoundSearchType**](../Model/.md)| Defines how the search for compound collection is matched | [optional] |
| **compound_types** | [**string[]**](../Model/string.md)| Compound types of the collections | [optional] |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **sort** | [**string[]**](../Model/string.md)| Sorting of the results to return | [optional] |
| **permissions** | [**string[]**](../Model/string.md)| Specify list of permission that you want evaluated in list format e.g. upload, editName   &lt;b&gt;Note:&lt;/b&gt; \&quot;addNode\&quot; permission is deprecated and will be removed in future versions. Please use \&quot;addCollection\&quot; instead. | [optional] |
| **inclusions** | [**string[]**](../Model/string.md)| Specify list of inclusions that you want evaluated in list format | [optional] |
| **information_fields** | [**int[]**](../Model/int.md)| Specify list of information fields ids | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\CollectionPage**](../Model/CollectionPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCollection()`

```php
updateCollection($collection_id, $update_collection, $x_celum_username): \Celum\Client\Model\Collection
```

Update a collection

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



$apiInstance = new Celum\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 56; // int | ID of the collection
$update_collection = new \Celum\Client\Model\UpdateCollection(); // \Celum\Client\Model\UpdateCollection
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->updateCollection($collection_id, $update_collection, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **int**| ID of the collection | |
| **update_collection** | [**\Celum\Client\Model\UpdateCollection**](../Model/UpdateCollection.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
