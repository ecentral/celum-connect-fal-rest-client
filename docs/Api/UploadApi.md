# Celum\Client\UploadApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**requestUpload()**](UploadApi.md#requestUpload) | **POST** /upload | Request an upload |


## `requestUpload()`

```php
requestUpload($request_upload, $x_celum_username): \Celum\Client\Model\Upload
```

Request an upload

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



$apiInstance = new Celum\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_upload = new \Celum\Client\Model\RequestUpload(); // \Celum\Client\Model\RequestUpload
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->requestUpload($request_upload, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->requestUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_upload** | [**\Celum\Client\Model\RequestUpload**](../Model/RequestUpload.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\Upload**](../Model/Upload.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
