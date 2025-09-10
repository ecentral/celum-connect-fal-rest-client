# celum-connect-fal-rest-client

### Authorization
If you are already logged into CELUM Content via browser, no further authorization is required. Otherwise, please use one of the below methods: 

1. Click on 'Authorize' on the right and either provide an API Key, type in your username/password or use OpenID Connect to log in.
2. OpenId implicit flow is disabled for security reasons and will not work as Authorization option. 

### Creating an asset 
1. Request upload via [upload endpoint](#/Upload/requestUpload). The endpoint will return a URl for uploading the binary and a upload handle to identify the upload.
2. Upload the content of your asset by sending a POST request to the upload URL from step 1 and setting the ```Content-Type``` header to ```application/octet-stream```. Optionally, you can also use multipart upload with ```multipart/form-data``` as ```Content-Type``` - like our Nova UI.
3. Create the asset via [create asset endpoint](#/Assets/createAssetInCollection) by passing in the upload handle from step 1 together with other parameters.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/celum-connect-fal-rest-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Celum\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = Celum\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');



$apiInstance = new Celum\Client\Api\AboutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_celum_username = 'x_celum_username_example'; // string | Provide the username of the user that you want to impersonate

try {
    $result = $apiInstance->getVersion($x_celum_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AboutApi->getVersion: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.celum.net/content-api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AboutApi* | [**getVersion**](docs/Api/AboutApi.md#getversion) | **GET** /version | Build &amp; version information
*AssetTypesApi* | [**getAssetType**](docs/Api/AssetTypesApi.md#getassettype) | **GET** /asset-types/{assetTypeId} | Get an asset type by ID
*AssetTypesApi* | [**getAssetTypes**](docs/Api/AssetTypesApi.md#getassettypes) | **GET** /asset-types | Get all asset types
*AssetsApi* | [**createAssetInCollection**](docs/Api/AssetsApi.md#createassetincollection) | **POST** /assets | Create an asset
*AssetsApi* | [**deleteAsset**](docs/Api/AssetsApi.md#deleteasset) | **DELETE** /assets/{assetId} | Delete an asset by ID
*AssetsApi* | [**findAssets**](docs/Api/AssetsApi.md#findassets) | **POST** /assets/search | Find all assets matching the complex criteria
*AssetsApi* | [**getAsset**](docs/Api/AssetsApi.md#getasset) | **GET** /assets/{assetId} | Get an asset by ID
*AssetsApi* | [**getAssets**](docs/Api/AssetsApi.md#getassets) | **GET** /assets | Get all assets matching the criteria
*AssetsApi* | [**updateAsset**](docs/Api/AssetsApi.md#updateasset) | **PATCH** /assets/{assetId} | Update an asset by ID
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /clients/{clientId} | Get the client configuration by ID
*CollectionTypesApi* | [**getCollectionType**](docs/Api/CollectionTypesApi.md#getcollectiontype) | **GET** /collection-types/{collectionTypeId} | Get collection type by ID.
*CollectionTypesApi* | [**getCollectionTypes**](docs/Api/CollectionTypesApi.md#getcollectiontypes) | **GET** /collection-types | Get all collection types.
*CollectionsApi* | [**createCollection**](docs/Api/CollectionsApi.md#createcollection) | **POST** /collections | Create a collection
*CollectionsApi* | [**deleteCollection**](docs/Api/CollectionsApi.md#deletecollection) | **DELETE** /collections/{collectionId} | Delete a collection by ID
*CollectionsApi* | [**findCollections**](docs/Api/CollectionsApi.md#findcollections) | **POST** /collections/search | Get all collections matching the criteria
*CollectionsApi* | [**getCollection**](docs/Api/CollectionsApi.md#getcollection) | **GET** /collections/{collectionId} | Get a collection by ID
*CollectionsApi* | [**getCollections**](docs/Api/CollectionsApi.md#getcollections) | **GET** /collections | Get all collections matching the criteria
*CollectionsApi* | [**updateCollection**](docs/Api/CollectionsApi.md#updatecollection) | **PATCH** /collections/{collectionId} | Update a collection
*CompoundObjectTypesApi* | [**getCompoundType**](docs/Api/CompoundObjectTypesApi.md#getcompoundtype) | **GET** /compound-types/{compoundTypeKey} | Get a compound object type by business key
*CompoundObjectTypesApi* | [**getCompoundTypes**](docs/Api/CompoundObjectTypesApi.md#getcompoundtypes) | **GET** /compound-types | Get all compound object types
*DownloadApi* | [**requestBulkDownload**](docs/Api/DownloadApi.md#requestbulkdownload) | **GET** /assets/download | 
*DownloadApi* | [**requestDownload**](docs/Api/DownloadApi.md#requestdownload) | **GET** /assets/{assetId}/download | Request the asset download for the given asset ID.
*DownloadFormatsApi* | [**getDownloadFormats**](docs/Api/DownloadFormatsApi.md#getdownloadformats) | **GET** /download-formats | Get all download formats.
*InformationFieldsApi* | [**getInformationFields**](docs/Api/InformationFieldsApi.md#getinformationfields) | **GET** /information-fields | Get all information fields associated with Assets, Nodes and Asset Relations
*JobsApi* | [**execute**](docs/Api/JobsApi.md#execute) | **POST** /jobs | Trigger a job
*JobsApi* | [**getStatus**](docs/Api/JobsApi.md#getstatus) | **GET** /jobs/{jobId} | Get the status of a job by ID
*RelationTypesApi* | [**getRelationType**](docs/Api/RelationTypesApi.md#getrelationtype) | **GET** /relation-types/{id} | Get relation type by id
*RelationTypesApi* | [**getRelationTypes**](docs/Api/RelationTypesApi.md#getrelationtypes) | **GET** /relation-types | Get all relation types
*RelationsApi* | [**createRelation**](docs/Api/RelationsApi.md#createrelation) | **POST** /relations | Create a relation
*RelationsApi* | [**deleteRelation**](docs/Api/RelationsApi.md#deleterelation) | **DELETE** /relations/{relationId} | Delete a relation by ID
*RelationsApi* | [**getRelationById**](docs/Api/RelationsApi.md#getrelationbyid) | **GET** /relations/{relationId} | Get a relation by ID
*RelationsApi* | [**getRelations**](docs/Api/RelationsApi.md#getrelations) | **GET** /relations | Get all relations matching the criteria
*RelationsApi* | [**updateRelation**](docs/Api/RelationsApi.md#updaterelation) | **PATCH** /relations/{relationId} | Update a relation
*RolesApi* | [**getRole**](docs/Api/RolesApi.md#getrole) | **GET** /roles/{roleId} | Get role
*RolesApi* | [**getRoles**](docs/Api/RolesApi.md#getroles) | **GET** /roles | Get roles
*UploadApi* | [**requestUpload**](docs/Api/UploadApi.md#requestupload) | **POST** /upload | Request an upload
*UserGroupsApi* | [**getUserGroupById**](docs/Api/UserGroupsApi.md#getusergroupbyid) | **GET** /user-groups/{userGroupId} | Get user group by id
*UserGroupsApi* | [**getUserGroups**](docs/Api/UserGroupsApi.md#getusergroups) | **GET** /user-groups | Get user groups
*UsersApi* | [**getCurrentUser**](docs/Api/UsersApi.md#getcurrentuser) | **GET** /users/me | Get the currently logged in user
*UsersApi* | [**getUserById**](docs/Api/UsersApi.md#getuserbyid) | **GET** /users/{userId} | Get user by id
*UsersApi* | [**getUserByName**](docs/Api/UsersApi.md#getuserbyname) | **GET** /users | Get users
*VersionsApi* | [**addVersion**](docs/Api/VersionsApi.md#addversion) | **POST** /assets/{assetId}/versions | Add a new version to an asset identified by the asset ID
*VersionsApi* | [**deleteVersion**](docs/Api/VersionsApi.md#deleteversion) | **DELETE** /assets/{assetId}/versions/{versionId} | Delete a version of an asset identified by the asset ID and version ID
*VersionsApi* | [**getVersions**](docs/Api/VersionsApi.md#getversions) | **GET** /assets/{assetId}/versions | Get all versions of an asset identified by the asset ID

## Models

- [AddExternalReference](docs/Model/AddExternalReference.md)
- [AddVersion](docs/Model/AddVersion.md)
- [AllAssetInformationFieldsInclusionDto](docs/Model/AllAssetInformationFieldsInclusionDto.md)
- [AllCollectionInformationFieldsInclusionDto](docs/Model/AllCollectionInformationFieldsInclusionDto.md)
- [AllDownloadFormatInclusionDto](docs/Model/AllDownloadFormatInclusionDto.md)
- [AllExternalReferencesInclusionDto](docs/Model/AllExternalReferencesInclusionDto.md)
- [AllFilePropertiesInclusionDto](docs/Model/AllFilePropertiesInclusionDto.md)
- [ArgumentValidationFault](docs/Model/ArgumentValidationFault.md)
- [Asset](docs/Model/Asset.md)
- [AssetAddedEvent](docs/Model/AssetAddedEvent.md)
- [AssetAvailabilityDateRangeFilter](docs/Model/AssetAvailabilityDateRangeFilter.md)
- [AssetAvailabilityFilter](docs/Model/AssetAvailabilityFilter.md)
- [AssetBooleanFieldFilter](docs/Model/AssetBooleanFieldFilter.md)
- [AssetBooleanFilePropertyEqualityFilter](docs/Model/AssetBooleanFilePropertyEqualityFilter.md)
- [AssetChecksumFilter](docs/Model/AssetChecksumFilter.md)
- [AssetCollectionReferenceFieldEqualityFilter](docs/Model/AssetCollectionReferenceFieldEqualityFilter.md)
- [AssetCollectionReferenceFieldNamesFilter](docs/Model/AssetCollectionReferenceFieldNamesFilter.md)
- [AssetCollectionTypeIdFilter](docs/Model/AssetCollectionTypeIdFilter.md)
- [AssetContentFilter](docs/Model/AssetContentFilter.md)
- [AssetCreatedEvent](docs/Model/AssetCreatedEvent.md)
- [AssetCreationDateEqualityFilter](docs/Model/AssetCreationDateEqualityFilter.md)
- [AssetCreationDateRangeFilter](docs/Model/AssetCreationDateRangeFilter.md)
- [AssetCreationUserIdFilter](docs/Model/AssetCreationUserIdFilter.md)
- [AssetCurrentVersionCreationDateEqualityFilter](docs/Model/AssetCurrentVersionCreationDateEqualityFilter.md)
- [AssetCurrentVersionCreationDateRangeFilter](docs/Model/AssetCurrentVersionCreationDateRangeFilter.md)
- [AssetCurrentVersionCreationUserIdFilter](docs/Model/AssetCurrentVersionCreationUserIdFilter.md)
- [AssetDateFieldEqualityFilter](docs/Model/AssetDateFieldEqualityFilter.md)
- [AssetDateFieldRangeFilter](docs/Model/AssetDateFieldRangeFilter.md)
- [AssetDateFilePropertyEqualityFilter](docs/Model/AssetDateFilePropertyEqualityFilter.md)
- [AssetDateFilePropertyRangeFilter](docs/Model/AssetDateFilePropertyRangeFilter.md)
- [AssetDeletedEvent](docs/Model/AssetDeletedEvent.md)
- [AssetDoubleFieldEqualityFilter](docs/Model/AssetDoubleFieldEqualityFilter.md)
- [AssetDoubleFieldRangeFilter](docs/Model/AssetDoubleFieldRangeFilter.md)
- [AssetDoubleFilePropertyEqualityFilter](docs/Model/AssetDoubleFilePropertyEqualityFilter.md)
- [AssetDoubleFilePropertyRangeFilter](docs/Model/AssetDoubleFilePropertyRangeFilter.md)
- [AssetDropdownFieldEqualityFilter](docs/Model/AssetDropdownFieldEqualityFilter.md)
- [AssetExpirationDateRangeFilter](docs/Model/AssetExpirationDateRangeFilter.md)
- [AssetFileCategoryFilter](docs/Model/AssetFileCategoryFilter.md)
- [AssetFileExtensionEmptyFilter](docs/Model/AssetFileExtensionEmptyFilter.md)
- [AssetFileExtensionFilter](docs/Model/AssetFileExtensionFilter.md)
- [AssetFileNameFilter](docs/Model/AssetFileNameFilter.md)
- [AssetFilter](docs/Model/AssetFilter.md)
- [AssetFilterType](docs/Model/AssetFilterType.md)
- [AssetFulltextFilter](docs/Model/AssetFulltextFilter.md)
- [AssetIdFilter](docs/Model/AssetIdFilter.md)
- [AssetIdRangeFilter](docs/Model/AssetIdRangeFilter.md)
- [AssetInclusionDto](docs/Model/AssetInclusionDto.md)
- [AssetInclusionDtoType](docs/Model/AssetInclusionDtoType.md)
- [AssetInformationFieldEmptyFilter](docs/Model/AssetInformationFieldEmptyFilter.md)
- [AssetInformationFieldPermissionsInclusionDto](docs/Model/AssetInformationFieldPermissionsInclusionDto.md)
- [AssetInformationFieldsInclusionDto](docs/Model/AssetInformationFieldsInclusionDto.md)
- [AssetLocalizedTextAreaFieldFilter](docs/Model/AssetLocalizedTextAreaFieldFilter.md)
- [AssetLocalizedTextFieldFilter](docs/Model/AssetLocalizedTextFieldFilter.md)
- [AssetLogicalFilter](docs/Model/AssetLogicalFilter.md)
- [AssetModificationDateEqualityFilter](docs/Model/AssetModificationDateEqualityFilter.md)
- [AssetModificationDateRangeFilter](docs/Model/AssetModificationDateRangeFilter.md)
- [AssetModificationUserIdFilter](docs/Model/AssetModificationUserIdFilter.md)
- [AssetNameFilter](docs/Model/AssetNameFilter.md)
- [AssetNegationFilter](docs/Model/AssetNegationFilter.md)
- [AssetNumberFieldEqualityFilter](docs/Model/AssetNumberFieldEqualityFilter.md)
- [AssetNumberFieldRangeFilter](docs/Model/AssetNumberFieldRangeFilter.md)
- [AssetNumberFilePropertyFilter](docs/Model/AssetNumberFilePropertyFilter.md)
- [AssetNumberFilePropertyRangeFilter](docs/Model/AssetNumberFilePropertyRangeFilter.md)
- [AssetPage](docs/Model/AssetPage.md)
- [AssetParentIdFilter](docs/Model/AssetParentIdFilter.md)
- [AssetPermissions](docs/Model/AssetPermissions.md)
- [AssetPermissionsInclusionDto](docs/Model/AssetPermissionsInclusionDto.md)
- [AssetReleasedEvent](docs/Model/AssetReleasedEvent.md)
- [AssetRemovedEvent](docs/Model/AssetRemovedEvent.md)
- [AssetStatus](docs/Model/AssetStatus.md)
- [AssetTagReferenceFieldEqualityFilter](docs/Model/AssetTagReferenceFieldEqualityFilter.md)
- [AssetTagReferenceFieldNamesFilter](docs/Model/AssetTagReferenceFieldNamesFilter.md)
- [AssetTextAreaFieldFilter](docs/Model/AssetTextAreaFieldFilter.md)
- [AssetTextFieldFilter](docs/Model/AssetTextFieldFilter.md)
- [AssetTextFilePropertyFilter](docs/Model/AssetTextFilePropertyFilter.md)
- [AssetType](docs/Model/AssetType.md)
- [AssetTypeIdFilter](docs/Model/AssetTypeIdFilter.md)
- [AssetTypePermissions](docs/Model/AssetTypePermissions.md)
- [AssetUpdatedEvent](docs/Model/AssetUpdatedEvent.md)
- [AssetValidationStatus](docs/Model/AssetValidationStatus.md)
- [AssetVersionActivatedEvent](docs/Model/AssetVersionActivatedEvent.md)
- [AssetVersionAddedEvent](docs/Model/AssetVersionAddedEvent.md)
- [AssetVersionDeletedEvent](docs/Model/AssetVersionDeletedEvent.md)
- [Availability](docs/Model/Availability.md)
- [AvailabilityType](docs/Model/AvailabilityType.md)
- [BooleanField](docs/Model/BooleanField.md)
- [BooleanFieldUpdateValue](docs/Model/BooleanFieldUpdateValue.md)
- [BooleanFieldValue](docs/Model/BooleanFieldValue.md)
- [BooleanFileProperty](docs/Model/BooleanFileProperty.md)
- [ClearBooleanValue](docs/Model/ClearBooleanValue.md)
- [ClearDateValue](docs/Model/ClearDateValue.md)
- [ClearDoubleValue](docs/Model/ClearDoubleValue.md)
- [ClearDropdownValue](docs/Model/ClearDropdownValue.md)
- [ClearLocalizedValue](docs/Model/ClearLocalizedValue.md)
- [ClearLock](docs/Model/ClearLock.md)
- [ClearNumberValue](docs/Model/ClearNumberValue.md)
- [ClearReferenceValue](docs/Model/ClearReferenceValue.md)
- [ClearTextValue](docs/Model/ClearTextValue.md)
- [ClearValueDto](docs/Model/ClearValueDto.md)
- [Client](docs/Model/Client.md)
- [Collection](docs/Model/Collection.md)
- [CollectionBooleanFieldFilter](docs/Model/CollectionBooleanFieldFilter.md)
- [CollectionCreatedEvent](docs/Model/CollectionCreatedEvent.md)
- [CollectionCreationDateEqualityFilter](docs/Model/CollectionCreationDateEqualityFilter.md)
- [CollectionCreationDateRangeFilter](docs/Model/CollectionCreationDateRangeFilter.md)
- [CollectionCreationUserIdFilter](docs/Model/CollectionCreationUserIdFilter.md)
- [CollectionDateFieldEqualityFilter](docs/Model/CollectionDateFieldEqualityFilter.md)
- [CollectionDateFieldRangeFilter](docs/Model/CollectionDateFieldRangeFilter.md)
- [CollectionDeletedEvent](docs/Model/CollectionDeletedEvent.md)
- [CollectionDoubleFieldEqualityFilter](docs/Model/CollectionDoubleFieldEqualityFilter.md)
- [CollectionDoubleFieldRangeFilter](docs/Model/CollectionDoubleFieldRangeFilter.md)
- [CollectionDropdownFieldEqualityFilter](docs/Model/CollectionDropdownFieldEqualityFilter.md)
- [CollectionFilter](docs/Model/CollectionFilter.md)
- [CollectionFilterType](docs/Model/CollectionFilterType.md)
- [CollectionFulltextFilter](docs/Model/CollectionFulltextFilter.md)
- [CollectionIdFilter](docs/Model/CollectionIdFilter.md)
- [CollectionIdRangeFilter](docs/Model/CollectionIdRangeFilter.md)
- [CollectionInclusionDto](docs/Model/CollectionInclusionDto.md)
- [CollectionInclusionDtoType](docs/Model/CollectionInclusionDtoType.md)
- [CollectionInformationFieldEmptyFilter](docs/Model/CollectionInformationFieldEmptyFilter.md)
- [CollectionInformationFieldPermissionsInclusionDto](docs/Model/CollectionInformationFieldPermissionsInclusionDto.md)
- [CollectionInformationFieldsInclusionDto](docs/Model/CollectionInformationFieldsInclusionDto.md)
- [CollectionLocalizedTextAreaFieldFilter](docs/Model/CollectionLocalizedTextAreaFieldFilter.md)
- [CollectionLocalizedTextFieldFilter](docs/Model/CollectionLocalizedTextFieldFilter.md)
- [CollectionLogicalFilter](docs/Model/CollectionLogicalFilter.md)
- [CollectionModificationDateEqualityFilter](docs/Model/CollectionModificationDateEqualityFilter.md)
- [CollectionModificationDateRangeFilter](docs/Model/CollectionModificationDateRangeFilter.md)
- [CollectionModificationUserIdFilter](docs/Model/CollectionModificationUserIdFilter.md)
- [CollectionMovedEvent](docs/Model/CollectionMovedEvent.md)
- [CollectionNameFilter](docs/Model/CollectionNameFilter.md)
- [CollectionNegationFilter](docs/Model/CollectionNegationFilter.md)
- [CollectionNumberFieldEqualityFilter](docs/Model/CollectionNumberFieldEqualityFilter.md)
- [CollectionNumberFieldRangeFilter](docs/Model/CollectionNumberFieldRangeFilter.md)
- [CollectionPage](docs/Model/CollectionPage.md)
- [CollectionParentIdFilter](docs/Model/CollectionParentIdFilter.md)
- [CollectionPermissions](docs/Model/CollectionPermissions.md)
- [CollectionPermissionsInclusionDto](docs/Model/CollectionPermissionsInclusionDto.md)
- [CollectionReference](docs/Model/CollectionReference.md)
- [CollectionReferenceCompoundElementRule](docs/Model/CollectionReferenceCompoundElementRule.md)
- [CollectionReferenceField](docs/Model/CollectionReferenceField.md)
- [CollectionReferenceFieldEqualityFilter](docs/Model/CollectionReferenceFieldEqualityFilter.md)
- [CollectionReferenceFieldNamesFilter](docs/Model/CollectionReferenceFieldNamesFilter.md)
- [CollectionReferenceFieldUpdateValue](docs/Model/CollectionReferenceFieldUpdateValue.md)
- [CollectionReferenceFieldValue](docs/Model/CollectionReferenceFieldValue.md)
- [CollectionReferenceTypeRule](docs/Model/CollectionReferenceTypeRule.md)
- [CollectionRoleAssignmentsInclusionDto](docs/Model/CollectionRoleAssignmentsInclusionDto.md)
- [CollectionTagReferenceFieldEqualityFilter](docs/Model/CollectionTagReferenceFieldEqualityFilter.md)
- [CollectionTagReferenceFieldNamesFilter](docs/Model/CollectionTagReferenceFieldNamesFilter.md)
- [CollectionTextAreaFieldFilter](docs/Model/CollectionTextAreaFieldFilter.md)
- [CollectionTextFieldFilter](docs/Model/CollectionTextFieldFilter.md)
- [CollectionType](docs/Model/CollectionType.md)
- [CollectionTypeIdFilter](docs/Model/CollectionTypeIdFilter.md)
- [CollectionUpdatedEvent](docs/Model/CollectionUpdatedEvent.md)
- [CollectionValidationStatus](docs/Model/CollectionValidationStatus.md)
- [CompoundElementDefinition](docs/Model/CompoundElementDefinition.md)
- [CompoundElementRule](docs/Model/CompoundElementRule.md)
- [CompoundElementRuleType](docs/Model/CompoundElementRuleType.md)
- [CompoundError](docs/Model/CompoundError.md)
- [CompoundObject](docs/Model/CompoundObject.md)
- [CompoundObjectState](docs/Model/CompoundObjectState.md)
- [CompoundObjectType](docs/Model/CompoundObjectType.md)
- [CompoundPreviewInformation](docs/Model/CompoundPreviewInformation.md)
- [CompoundSearchType](docs/Model/CompoundSearchType.md)
- [CompoundTypeInformation](docs/Model/CompoundTypeInformation.md)
- [CompoundTypeRule](docs/Model/CompoundTypeRule.md)
- [CompoundTypeRuleType](docs/Model/CompoundTypeRuleType.md)
- [CreateAsset](docs/Model/CreateAsset.md)
- [CreateCollection](docs/Model/CreateCollection.md)
- [CreateRelation](docs/Model/CreateRelation.md)
- [DateField](docs/Model/DateField.md)
- [DateFieldUpdateValue](docs/Model/DateFieldUpdateValue.md)
- [DateFieldValue](docs/Model/DateFieldValue.md)
- [DateFileProperty](docs/Model/DateFileProperty.md)
- [DatedAvailability](docs/Model/DatedAvailability.md)
- [Description](docs/Model/Description.md)
- [DirectAvailability](docs/Model/DirectAvailability.md)
- [DoubleField](docs/Model/DoubleField.md)
- [DoubleFieldUpdateValue](docs/Model/DoubleFieldUpdateValue.md)
- [DoubleFieldValue](docs/Model/DoubleFieldValue.md)
- [DoubleFileProperty](docs/Model/DoubleFileProperty.md)
- [Download](docs/Model/Download.md)
- [DownloadFormat](docs/Model/DownloadFormat.md)
- [DownloadFormatInclusionDto](docs/Model/DownloadFormatInclusionDto.md)
- [DownloadFormatInterceptorDefinition](docs/Model/DownloadFormatInterceptorDefinition.md)
- [DownloadItem](docs/Model/DownloadItem.md)
- [DownloadJob](docs/Model/DownloadJob.md)
- [DownloadJobTrigger](docs/Model/DownloadJobTrigger.md)
- [DropDownSortOrder](docs/Model/DropDownSortOrder.md)
- [DropdownField](docs/Model/DropdownField.md)
- [DropdownFieldUpdateValue](docs/Model/DropdownFieldUpdateValue.md)
- [DropdownFieldValue](docs/Model/DropdownFieldValue.md)
- [DropdownOption](docs/Model/DropdownOption.md)
- [Error](docs/Model/Error.md)
- [Event](docs/Model/Event.md)
- [EventType](docs/Model/EventType.md)
- [ExternalReferenceAddedEvent](docs/Model/ExternalReferenceAddedEvent.md)
- [ExternalReferenceDeletedEvent](docs/Model/ExternalReferenceDeletedEvent.md)
- [ExternalReferenceDto](docs/Model/ExternalReferenceDto.md)
- [FileCategory](docs/Model/FileCategory.md)
- [FilePropertyObject](docs/Model/FilePropertyObject.md)
- [FilePropertyObjectType](docs/Model/FilePropertyObjectType.md)
- [FindAssets](docs/Model/FindAssets.md)
- [FindCollections](docs/Model/FindCollections.md)
- [GenericValidationFault](docs/Model/GenericValidationFault.md)
- [InformationFieldEntityType](docs/Model/InformationFieldEntityType.md)
- [InformationFieldObject](docs/Model/InformationFieldObject.md)
- [InformationFieldObjectType](docs/Model/InformationFieldObjectType.md)
- [InformationFieldPermissions](docs/Model/InformationFieldPermissions.md)
- [InformationFieldSet](docs/Model/InformationFieldSet.md)
- [InformationFieldValidationFault](docs/Model/InformationFieldValidationFault.md)
- [InformationFieldValueObjectObject](docs/Model/InformationFieldValueObjectObject.md)
- [InformationFieldValueObjectObjectType](docs/Model/InformationFieldValueObjectObjectType.md)
- [InformationFieldValueSet](docs/Model/InformationFieldValueSet.md)
- [InformationFieldValueUpdateObject](docs/Model/InformationFieldValueUpdateObject.md)
- [InformationFieldValueUpdateObjectType](docs/Model/InformationFieldValueUpdateObjectType.md)
- [Instance](docs/Model/Instance.md)
- [Job](docs/Model/Job.md)
- [JobTrigger](docs/Model/JobTrigger.md)
- [JobTriggerType](docs/Model/JobTriggerType.md)
- [JobType](docs/Model/JobType.md)
- [Languages](docs/Model/Languages.md)
- [LocalizedArgumentValidationFault](docs/Model/LocalizedArgumentValidationFault.md)
- [LocalizedTextAreaField](docs/Model/LocalizedTextAreaField.md)
- [LocalizedTextAreaFieldUpdateValue](docs/Model/LocalizedTextAreaFieldUpdateValue.md)
- [LocalizedTextAreaFieldValue](docs/Model/LocalizedTextAreaFieldValue.md)
- [LocalizedTextField](docs/Model/LocalizedTextField.md)
- [LocalizedTextFieldUpdateValue](docs/Model/LocalizedTextFieldUpdateValue.md)
- [LocalizedTextFieldValue](docs/Model/LocalizedTextFieldValue.md)
- [Lock](docs/Model/Lock.md)
- [ModifyExternalReferences](docs/Model/ModifyExternalReferences.md)
- [ModifyLocalizedValue](docs/Model/ModifyLocalizedValue.md)
- [ModifyParents](docs/Model/ModifyParents.md)
- [ModifyReferenceValue](docs/Model/ModifyReferenceValue.md)
- [ModifyRequiredCollectionIds](docs/Model/ModifyRequiredCollectionIds.md)
- [ModifyRoleAssignees](docs/Model/ModifyRoleAssignees.md)
- [ModifyRoleAssignments](docs/Model/ModifyRoleAssignments.md)
- [NumberField](docs/Model/NumberField.md)
- [NumberFieldUpdateValue](docs/Model/NumberFieldUpdateValue.md)
- [NumberFieldValue](docs/Model/NumberFieldValue.md)
- [NumberFileProperty](docs/Model/NumberFileProperty.md)
- [OAuth2](docs/Model/OAuth2.md)
- [Pagination](docs/Model/Pagination.md)
- [Path](docs/Model/Path.md)
- [PathSegment](docs/Model/PathSegment.md)
- [PreviewConversionEvent](docs/Model/PreviewConversionEvent.md)
- [PreviewSize](docs/Model/PreviewSize.md)
- [PreviewState](docs/Model/PreviewState.md)
- [Provider](docs/Model/Provider.md)
- [Relation](docs/Model/Relation.md)
- [RelationCreatedEvent](docs/Model/RelationCreatedEvent.md)
- [RelationDeletedEvent](docs/Model/RelationDeletedEvent.md)
- [RelationDirection](docs/Model/RelationDirection.md)
- [RelationPage](docs/Model/RelationPage.md)
- [RelationStatus](docs/Model/RelationStatus.md)
- [RelationType](docs/Model/RelationType.md)
- [RemoveCompoundObjectTypeKey](docs/Model/RemoveCompoundObjectTypeKey.md)
- [RemoveExternalReference](docs/Model/RemoveExternalReference.md)
- [RequestUpload](docs/Model/RequestUpload.md)
- [Role](docs/Model/Role.md)
- [RoleAssetPermissions](docs/Model/RoleAssetPermissions.md)
- [RoleAssignee](docs/Model/RoleAssignee.md)
- [RoleAssigneeSubject](docs/Model/RoleAssigneeSubject.md)
- [RoleAssigneeUpdate](docs/Model/RoleAssigneeUpdate.md)
- [RoleAssignment](docs/Model/RoleAssignment.md)
- [RoleCollectionPermissions](docs/Model/RoleCollectionPermissions.md)
- [RoleContentPermissions](docs/Model/RoleContentPermissions.md)
- [RoleReference](docs/Model/RoleReference.md)
- [SearchOperator](docs/Model/SearchOperator.md)
- [SearchType](docs/Model/SearchType.md)
- [SetBooleanValue](docs/Model/SetBooleanValue.md)
- [SetCompoundObjectTypeKey](docs/Model/SetCompoundObjectTypeKey.md)
- [SetDateValue](docs/Model/SetDateValue.md)
- [SetDoubleValue](docs/Model/SetDoubleValue.md)
- [SetDropdownValue](docs/Model/SetDropdownValue.md)
- [SetLock](docs/Model/SetLock.md)
- [SetNumberValue](docs/Model/SetNumberValue.md)
- [SetParents](docs/Model/SetParents.md)
- [SetReferenceValue](docs/Model/SetReferenceValue.md)
- [SetRequiredCollectionIds](docs/Model/SetRequiredCollectionIds.md)
- [SetRoleAssignments](docs/Model/SetRoleAssignments.md)
- [SetTextValue](docs/Model/SetTextValue.md)
- [Signing](docs/Model/Signing.md)
- [Sort](docs/Model/Sort.md)
- [SubjectDto](docs/Model/SubjectDto.md)
- [Tag](docs/Model/Tag.md)
- [TagReferenceField](docs/Model/TagReferenceField.md)
- [TagReferenceFieldUpdateValue](docs/Model/TagReferenceFieldUpdateValue.md)
- [TagReferenceFieldValue](docs/Model/TagReferenceFieldValue.md)
- [TextAreaField](docs/Model/TextAreaField.md)
- [TextAreaFieldUpdateValue](docs/Model/TextAreaFieldUpdateValue.md)
- [TextAreaFieldValue](docs/Model/TextAreaFieldValue.md)
- [TextField](docs/Model/TextField.md)
- [TextFieldUpdateValue](docs/Model/TextFieldUpdateValue.md)
- [TextFieldValue](docs/Model/TextFieldValue.md)
- [TextFileProperty](docs/Model/TextFileProperty.md)
- [Trail](docs/Model/Trail.md)
- [UpdateAlternativePreview](docs/Model/UpdateAlternativePreview.md)
- [UpdateAsset](docs/Model/UpdateAsset.md)
- [UpdateBooleanFieldValue](docs/Model/UpdateBooleanFieldValue.md)
- [UpdateBooleanValue](docs/Model/UpdateBooleanValue.md)
- [UpdateBooleanValueOp](docs/Model/UpdateBooleanValueOp.md)
- [UpdateCollection](docs/Model/UpdateCollection.md)
- [UpdateCollectionReferenceCompoundElementRule](docs/Model/UpdateCollectionReferenceCompoundElementRule.md)
- [UpdateCollectionReferenceFieldValue](docs/Model/UpdateCollectionReferenceFieldValue.md)
- [UpdateCompoundElementRule](docs/Model/UpdateCompoundElementRule.md)
- [UpdateCompoundElementRuleType](docs/Model/UpdateCompoundElementRuleType.md)
- [UpdateCompoundObject](docs/Model/UpdateCompoundObject.md)
- [UpdateCompoundObjectTypeKey](docs/Model/UpdateCompoundObjectTypeKey.md)
- [UpdateCompoundObjectTypeKeyOp](docs/Model/UpdateCompoundObjectTypeKeyOp.md)
- [UpdateDateFieldValue](docs/Model/UpdateDateFieldValue.md)
- [UpdateDateValue](docs/Model/UpdateDateValue.md)
- [UpdateDateValueOp](docs/Model/UpdateDateValueOp.md)
- [UpdateDoubleFieldValue](docs/Model/UpdateDoubleFieldValue.md)
- [UpdateDoubleValue](docs/Model/UpdateDoubleValue.md)
- [UpdateDoubleValueOp](docs/Model/UpdateDoubleValueOp.md)
- [UpdateDropdownFieldValue](docs/Model/UpdateDropdownFieldValue.md)
- [UpdateDropdownValue](docs/Model/UpdateDropdownValue.md)
- [UpdateDropdownValueOp](docs/Model/UpdateDropdownValueOp.md)
- [UpdateExternalReferences](docs/Model/UpdateExternalReferences.md)
- [UpdateExternalReferencesOp](docs/Model/UpdateExternalReferencesOp.md)
- [UpdateInformationFieldValueObject](docs/Model/UpdateInformationFieldValueObject.md)
- [UpdateInformationFieldValueObjectType](docs/Model/UpdateInformationFieldValueObjectType.md)
- [UpdateLocalizedTextAreaFieldValue](docs/Model/UpdateLocalizedTextAreaFieldValue.md)
- [UpdateLocalizedTextFieldValue](docs/Model/UpdateLocalizedTextFieldValue.md)
- [UpdateLocalizedValue](docs/Model/UpdateLocalizedValue.md)
- [UpdateLocalizedValueOp](docs/Model/UpdateLocalizedValueOp.md)
- [UpdateLock](docs/Model/UpdateLock.md)
- [UpdateLockOp](docs/Model/UpdateLockOp.md)
- [UpdateNumberFieldValue](docs/Model/UpdateNumberFieldValue.md)
- [UpdateNumberValue](docs/Model/UpdateNumberValue.md)
- [UpdateNumberValueOp](docs/Model/UpdateNumberValueOp.md)
- [UpdateParents](docs/Model/UpdateParents.md)
- [UpdateParentsOp](docs/Model/UpdateParentsOp.md)
- [UpdateReferenceValue](docs/Model/UpdateReferenceValue.md)
- [UpdateReferenceValueOp](docs/Model/UpdateReferenceValueOp.md)
- [UpdateRelation](docs/Model/UpdateRelation.md)
- [UpdateRequiredCollectionIds](docs/Model/UpdateRequiredCollectionIds.md)
- [UpdateRequiredCollectionIdsOp](docs/Model/UpdateRequiredCollectionIdsOp.md)
- [UpdateTagReferenceFieldValue](docs/Model/UpdateTagReferenceFieldValue.md)
- [UpdateTextAreaFieldValue](docs/Model/UpdateTextAreaFieldValue.md)
- [UpdateTextFieldValue](docs/Model/UpdateTextFieldValue.md)
- [UpdateTextValue](docs/Model/UpdateTextValue.md)
- [UpdateTextValueOp](docs/Model/UpdateTextValueOp.md)
- [Upload](docs/Model/Upload.md)
- [User](docs/Model/User.md)
- [UserGroup](docs/Model/UserGroup.md)
- [UserGroupPage](docs/Model/UserGroupPage.md)
- [UserGroupReference](docs/Model/UserGroupReference.md)
- [UserPage](docs/Model/UserPage.md)
- [UserPermissions](docs/Model/UserPermissions.md)
- [UserReference](docs/Model/UserReference.md)
- [ValidationFault](docs/Model/ValidationFault.md)
- [ValidationFaultType](docs/Model/ValidationFaultType.md)
- [ValidationLevel](docs/Model/ValidationLevel.md)
- [Version](docs/Model/Version.md)
- [VersionInfoDto](docs/Model/VersionInfoDto.md)
- [VersionPage](docs/Model/VersionPage.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


### basicAuth

- **Type**: HTTP basic authentication

### openId

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Generator version: `7.16.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
