# # Version

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the version |
**active** | **bool** | Is the version active? |
**filesize** | **int** | The file size of the version in Bytes |
**filename** | **string** | The file name of the version |
**file_extension** | **string** | The file extension of the version | [optional]
**file_checksum** | **string** | The checksum of the file of the version | [optional]
**file_category** | [**\Celum\Client\Model\FileCategory**](FileCategory.md) | The file category of the version |
**preview_state** | [**\Celum\Client\Model\PreviewState**](PreviewState.md) | The preview state of the version | [optional]
**preview_urls** | **array<string,string>** | The preview URLs of the version | [optional]
**preview_size** | [**\Celum\Client\Model\PreviewSize**](PreviewSize.md) | The size of the PREVIEW | [optional]
**creation** | [**\Celum\Client\Model\Trail**](Trail.md) | The creation information of the entity with time and user. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
