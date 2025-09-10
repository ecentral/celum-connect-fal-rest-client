# # UpdateCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compound_object** | [**\Celum\Client\Model\UpdateCompoundObject**](UpdateCompoundObject.md) | Compound object details to update | [optional]
**name** | **array<string,string>** | Localized labels | [optional]
**validation_level** | [**\Celum\Client\Model\ValidationLevel**](ValidationLevel.md) | Validation level. Ignored for child collections if validationLevelInherited is true. | [optional]
**validation_level_inherited** | **bool** | Inherit the validation level from parent if there is one. Ignored for root collections. | [optional]
**information_field_values** | [**\Celum\Client\Model\UpdateInformationFieldValueObject[]**](UpdateInformationFieldValueObject.md) | Update information fields | [optional]
**role_assignments** | [**\Celum\Client\Model\ModifyRoleAssignments[]**](ModifyRoleAssignments.md) | Update role assignments | [optional]
**parent_id** | [**\Celum\Client\Model\UpdateNumberValue**](UpdateNumberValue.md) | Update parent ID - set new parent ID or use clear to move to root | [optional]
**icon** | **string** | Collection icon | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
