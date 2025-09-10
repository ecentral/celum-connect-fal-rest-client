# # Relation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the relation |
**creation** | [**\Celum\Client\Model\Trail**](Trail.md) | The creation information of the entity with time and user. |
**modification** | [**\Celum\Client\Model\Trail**](Trail.md) | The modification information of the entity with time and user. | [optional]
**type_id** | **int** | The ID of the type | [optional]
**information_field_value_sets** | [**\Celum\Client\Model\InformationFieldValueSet[]**](InformationFieldValueSet.md) | Information field value sets &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**source_asset** | [**\Celum\Client\Model\Asset**](Asset.md) | The source asset of the relation | [optional]
**target_asset** | [**\Celum\Client\Model\Asset**](Asset.md) | The target asset of the relation | [optional]
**status** | [**\Celum\Client\Model\RelationStatus**](RelationStatus.md) | The relation status of the relation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
