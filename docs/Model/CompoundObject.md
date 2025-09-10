# # CompoundObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection_id** | **int** | The ID of the containing collection. |
**compound_type_key** | **string** | Business key of the compound type. |
**compound_object_state** | [**\Celum\Client\Model\CompoundObjectState**](CompoundObjectState.md) | Evaluated state of the compound object. |
**element_rules** | [**\Celum\Client\Model\CompoundElementRule[]**](CompoundElementRule.md) | List of element rules for the compound object. |
**synced_on** | **\DateTime** | The last evaluation | [optional]
**errors** | [**\Celum\Client\Model\CompoundError[]**](CompoundError.md) | List of error categories that occurred during the evaluation. | [optional]
**preview_information** | [**\Celum\Client\Model\CompoundPreviewInformation**](CompoundPreviewInformation.md) | The preview information of the compound object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
