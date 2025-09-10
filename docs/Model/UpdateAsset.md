# # UpdateAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lock** | [**\Celum\Client\Model\UpdateLock**](UpdateLock.md) | Add a lock to an asset | [optional]
**name** | **string** | New name of the asset | [optional]
**type_id** | **int** | New type ID of the asset | [optional]
**current_version** | **int** | Set this already existing version of the asset active | [optional]
**availability** | [**\Celum\Client\Model\Availability**](Availability.md) | The availability of the asset assigned directly | [optional]
**parent_ids** | [**\Celum\Client\Model\UpdateParents**](UpdateParents.md) | Set or modify the parents of an asset | [optional]
**external_references** | [**\Celum\Client\Model\UpdateExternalReferences**](UpdateExternalReferences.md) | Set or modify the external references of an asset | [optional]
**alternative_preview** | [**\Celum\Client\Model\UpdateAlternativePreview**](UpdateAlternativePreview.md) | Set or modify the alternative preview of an asset | [optional]
**information_field_values** | [**\Celum\Client\Model\UpdateInformationFieldValueObject[]**](UpdateInformationFieldValueObject.md) | Update information fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
