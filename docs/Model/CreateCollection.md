# # CreateCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **array<string,string>** | Localized collection name |
**icon** | **string** | Collection icon | [optional]
**type_id** | **int** | ID of the collection type. If specified, a root collection will be created. Either typeId or parentId must be provided but not both. | [optional]
**parent_id** | **int** | ID of the parent collection. If specified, a sub-collection will be created. Either typeId or parentId must be provided but not both. | [optional]
**validation_level** | [**\Celum\Client\Model\ValidationLevel**](ValidationLevel.md) | Level of validation. Defaults to STRICT for root collections and when validationLevelInherited is false for child collections. Must not be set when validationLevelInherited is true. | [optional]
**validation_level_inherited** | **bool** | Inherit the validation level from parent if there is one. Defaults to true for child collections. Must not be set for root collections. | [optional]
**information_field_values** | [**\Celum\Client\Model\InformationFieldValueUpdateObject[]**](InformationFieldValueUpdateObject.md) | Collection of information field values - defined by asset types | [optional]
**role_assignments** | [**\Celum\Client\Model\SetRoleAssignments[]**](SetRoleAssignments.md) | Collection Role assignments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
