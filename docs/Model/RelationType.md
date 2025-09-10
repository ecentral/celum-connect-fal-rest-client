# # RelationType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the meta data type |
**name** | **string** | The name of the meta data type |
**labels** | **array<string,string>** | Localized labels |
**information_field_sets** | [**\Celum\Client\Model\InformationFieldSet[]**](InformationFieldSet.md) | Additional information field value sets &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**description** | **array<string,string>** |  | [optional]
**source_to_target** | [**\Celum\Client\Model\RelationDirection**](RelationDirection.md) |  | [optional]
**target_to_source** | [**\Celum\Client\Model\RelationDirection**](RelationDirection.md) |  | [optional]
**creatable_via_ui** | **bool** |  | [optional]
**deletable_via_ui** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
