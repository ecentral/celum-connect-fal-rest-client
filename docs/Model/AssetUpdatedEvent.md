# # AssetUpdatedEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Celum\Client\Model\EventType**](EventType.md) |  |
**entity** | [**\Celum\Client\Model\Asset**](Asset.md) | The asset that the event is related to | [optional]
**entity_before_update** | [**\Celum\Client\Model\Asset**](Asset.md) | The asset before the update | [optional]
**updated_fields** | **string[]** | Updated fields | [optional]
**updated_information_fields** | **int[]** | Updated information fields | [optional]
**updated_file_properties** | **string[]** | Updated file properties | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
