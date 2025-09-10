# # CollectionType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the meta data type |
**name** | **string** | The name of the meta data type |
**labels** | **array<string,string>** | Localized labels |
**information_field_sets** | [**\Celum\Client\Model\InformationFieldSet[]**](InformationFieldSet.md) | Additional information field value sets &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**permission_defining** | **bool** | Is this collection type permission defining. If not, assets cannot be uploaded directly to collections of this type |
**tag_cloud** | **bool** | Is this collection type a tag cloud |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
