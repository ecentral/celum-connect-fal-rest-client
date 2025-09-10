# Celum\Client\UsersApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCurrentUser()**](UsersApi.md#getCurrentUser) | **GET** /users/me | Get the currently logged in user |
| [**getUserById()**](UsersApi.md#getUserById) | **GET** /users/{userId} | Get user by id |
| [**getUserByName()**](UsersApi.md#getUserByName) | **GET** /users | Get users |


## `getCurrentUser()`

```php
getCurrentUser($x_celum_username): \Celum\Client\Model\User
```

Get the currently logged in user

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



$apiInstance = new Celum\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getCurrentUser($x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserById()`

```php
getUserById($user_id, $x_celum_username): \Celum\Client\Model\User
```

Get user by id

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



$apiInstance = new Celum\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of the user
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getUserById($user_id, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| ID of the user | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserByName()`

```php
getUserByName($username, $user_group_id, $quick_search, $page, $size, $sort, $x_celum_username): \Celum\Client\Model\UserPage
```

Get users

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



$apiInstance = new Celum\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = maxmustermann; // string | Username of the user
$user_group_id = 1; // int | The user group ID of the user
$quick_search = 'quick_search_example'; // string | Quick search value
$page = 1; // int | Number of the page of results
$size = 20; // int | Size of the page of results, default is 20 but may change based on client ID and server-side configuration
$sort = id,ASC; // string | Sorting of the results to return (format: field,order) <br/> Example: id,ASC | id,DESC <br/> Valid order values: ASC | DESC <br/> Valid field values for user sorting: id | username | email | firstname | lastname
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getUserByName($username, $user_group_id, $quick_search, $page, $size, $sort, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user | [optional] |
| **user_group_id** | **int**| The user group ID of the user | [optional] |
| **quick_search** | **string**| Quick search value | [optional] |
| **page** | **int**| Number of the page of results | [optional] [default to 1] |
| **size** | **int**| Size of the page of results, default is 20 but may change based on client ID and server-side configuration | [optional] |
| **sort** | **string**| Sorting of the results to return (format: field,order) &lt;br/&gt; Example: id,ASC | id,DESC &lt;br/&gt; Valid order values: ASC | DESC &lt;br/&gt; Valid field values for user sorting: id | username | email | firstname | lastname | [optional] |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\UserPage**](../Model/UserPage.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
