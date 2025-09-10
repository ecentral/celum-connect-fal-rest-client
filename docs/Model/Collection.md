# # Collection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of an entity |
**creation** | [**\Celum\Client\Model\Trail**](Trail.md) | The creation information of the entity with time and user. |
**modification** | [**\Celum\Client\Model\Trail**](Trail.md) | The modification information of the entity with time and user. | [optional]
**type_id** | **int** | The ID of the type | [optional]
**information_field_value_sets** | [**\Celum\Client\Model\InformationFieldValueSet[]**](InformationFieldValueSet.md) | Information field value sets &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**name** | **array<string,string>** | Localized names of the collection. |
**icon** | **string** | The icon associated with the collection | [optional]
**parent_id** | **int** | The parent ID of the collection | [optional]
**path** | [**\Celum\Client\Model\Path**](Path.md) | The location of the collection |
**has_children** | **bool** | Does the collection have children? |
**validation_level_inherited** | **bool** | Does the collection inherit the validation level? |
**validation_level** | [**\Celum\Client\Model\ValidationLevel**](ValidationLevel.md) | The level of validation |
**validation_status** | [**\Celum\Client\Model\CollectionValidationStatus**](CollectionValidationStatus.md) | The status of the validation |
**permissions** | [**\Celum\Client\Model\CollectionPermissions**](CollectionPermissions.md) | The user permissions for assets in the collection |
**compound_object** | [**\Celum\Client\Model\CompoundObject**](CompoundObject.md) | Details of the compound object. | [optional]
**role_assignments** | [**\Celum\Client\Model\RoleAssignment[]**](RoleAssignment.md) | Roles assigned to this collection | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
