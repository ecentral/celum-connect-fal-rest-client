# # CreateAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the asset | [optional]
**upload_handle** | **string** | The upload handle of the asset, if it&#39;s empty then a placeholder asset will be created | [optional]
**alternative_preview_upload_handle** | **string** | The alternative upload handle of the asset | [optional]
**parent_id** | **int** | The ID of the parent collection to create the asset in |
**type_id** | **int** | The ID of the asset type - refers to endpoint asset types | [optional]
**information_field_values** | [**\Celum\Client\Model\InformationFieldValueUpdateObject[]**](InformationFieldValueUpdateObject.md) | Collection of information field values - defined by asset types | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
