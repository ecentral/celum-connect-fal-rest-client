# Celum\Client\UserGroupsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGroupById()**](UserGroupsApi.md#getUserGroupById) | **GET** /user-groups/{userGroupId} | Get user group by id |
| [**getUserGroups()**](UserGroupsApi.md#getUserGroups) | **GET** /user-groups | Get user groups |


## `getUserGroupById()`

```php
getUserGroupById($user_group_id, $x_celum_username): \Celum\Client\Model\UserGroup
```

Get user group by id

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



$apiInstance = new Celum\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_group_id = 56; // int | The user group ID of the user
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getUserGroupById($user_group_id, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_group_id** | **int**| The user group ID of the user | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\UserGroup**](../Model/UserGroup.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserGroups()`

```php
getUserGroups($user_id, $quick_search, $page, $size, $sort, $x_celum_username): \Celum\Client\Model\UserGroupPage
```

Get user groups

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



$apiInstance = new Celum\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1; // int | ID of the user
$quick_search = 'quick_search_example'; // string | Quick search value
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$sort = id,ASC; // string | Sorting of the results to return (format: field,order) <br/> Example: id,ASC | id,DESC <br/> Valid order values: ASC | DESC <br/> Valid field values for user group sorting: id | name
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getUserGroups($user_id, $quick_search, $page, $size, $sort, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| ID of the user | [optional] |
| **quick_search** | **string**| Quick search value | [optional] |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **sort** | **string**| Sorting of the results to return (format: field,order) &lt;br/&gt; Example: id,ASC | id,DESC &lt;br/&gt; Valid order values: ASC | DESC &lt;br/&gt; Valid field values for user group sorting: id | name | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\UserGroupPage**](../Model/UserGroupPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
