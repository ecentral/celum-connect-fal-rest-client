# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of an entity |
**creation** | [**\Celum\Client\Model\Trail**](Trail.md) | The creation information of the entity with time and user. |
**modification** | [**\Celum\Client\Model\Trail**](Trail.md) | The modification information of the entity with time and user. | [optional]
**type_id** | **int** | The ID of the type | [optional]
**information_field_value_sets** | [**\Celum\Client\Model\InformationFieldValueSet[]**](InformationFieldValueSet.md) | Information field value sets &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**name** | **string** | The name of the asset |
**release_status** | [**\Celum\Client\Model\AssetStatus**](AssetStatus.md) | The release status of the asset |
**current_version** | [**\Celum\Client\Model\Version**](Version.md) | The version of the asset |
**availability** | [**\Celum\Client\Model\Availability**](Availability.md) | The status of the availability of the asset | [optional]
**parent_ids** | **int[]** | The parents of the asset defined by ID | [optional]
**parent_paths** | [**\Celum\Client\Model\Path[]**](Path.md) | The parent paths of the asset | [optional]
**validation_level** | [**\Celum\Client\Model\ValidationLevel**](ValidationLevel.md) | The level of validation |
**validation_status** | [**\Celum\Client\Model\AssetValidationStatus**](AssetValidationStatus.md) | The status of the validation |
**lock** | [**\Celum\Client\Model\Lock**](Lock.md) | Provides lock information of an asset | [optional]
**file_properties** | [**\Celum\Client\Model\FilePropertyObject[]**](FilePropertyObject.md) | File properties &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type. | [optional]
**external_references** | [**\Celum\Client\Model\ExternalReferenceDto[]**](ExternalReferenceDto.md) | The external references of the asset &lt;br&gt; IMPORTANT: This field is not included in the response when requesting a (pageable) list of entities of this type by default. For configuration please contact your administrator. | [optional]
**permissions** | [**\Celum\Client\Model\AssetPermissions**](AssetPermissions.md) | The permissions of the asset | [optional]
**download_formats** | [**\Celum\Client\Model\DownloadFormat[]**](DownloadFormat.md) | The download formats in which the asset can be downloaded | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
