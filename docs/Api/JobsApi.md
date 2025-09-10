# Celum\Client\JobsApi

All URIs are relative to https://demo.celum.net/content-api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**execute()**](JobsApi.md#execute) | **POST** /jobs | Trigger a job |
| [**getStatus()**](JobsApi.md#getStatus) | **GET** /jobs/{jobId} | Get the status of a job by ID |


## `execute()`

```php
execute($download_job_trigger, $x_celum_username): \Celum\Client\Model\DownloadJob
```

Trigger a job

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



$apiInstance = new Celum\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$download_job_trigger = new \Celum\Client\Model\DownloadJobTrigger(); // \Celum\Client\Model\DownloadJobTrigger
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->execute($download_job_trigger, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->execute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **download_job_trigger** | [**\Celum\Client\Model\DownloadJobTrigger**](../Model/DownloadJobTrigger.md)|  | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\DownloadJob**](../Model/DownloadJob.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatus()`

```php
getStatus($job_id, $x_celum_username): \Celum\Client\Model\DownloadJob
```

Get the status of a job by ID

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



$apiInstance = new Celum\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | ID of a job
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getStatus($job_id, $x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| ID of a job | |
| **x_celum_username** | **string**| Provide the username of the user that you want to impersonate | [optional] |

### Return type

[**\Celum\Client\Model\DownloadJob**](../Model/DownloadJob.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth), [openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
