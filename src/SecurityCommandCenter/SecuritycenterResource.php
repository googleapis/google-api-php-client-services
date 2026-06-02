<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SecurityCommandCenter;

class SecuritycenterResource extends \Google\Collection
{
  public const CLOUD_PROVIDER_CLOUD_PROVIDER_UNSPECIFIED = 'CLOUD_PROVIDER_UNSPECIFIED';
  public const CLOUD_PROVIDER_GOOGLE_CLOUD_PLATFORM = 'GOOGLE_CLOUD_PLATFORM';
  public const CLOUD_PROVIDER_AMAZON_WEB_SERVICES = 'AMAZON_WEB_SERVICES';
  public const CLOUD_PROVIDER_MICROSOFT_AZURE = 'MICROSOFT_AZURE';
  protected $collection_key = 'folders';
  protected $adcApplicationType = AdcApplication::class;
  protected $adcApplicationDataType = '';
  protected $adcApplicationTemplateType = AdcApplicationTemplateRevision::class;
  protected $adcApplicationTemplateDataType = '';
  protected $adcSharedTemplateType = AdcSharedTemplateRevision::class;
  protected $adcSharedTemplateDataType = '';
  protected $applicationType = GoogleCloudSecuritycenterV1ResourceApplication::class;
  protected $applicationDataType = '';
  protected $awsMetadataType = AwsMetadata::class;
  protected $awsMetadataDataType = '';
  protected $azureMetadataType = AzureMetadata::class;
  protected $azureMetadataDataType = '';
  /**
   * @var string
   */
  public $cloudProvider;
  /**
   * @var string
   */
  public $displayName;
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $organization;
  /**
   * @var string
   */
  public $parentDisplayName;
  /**
   * @var string
   */
  public $parentName;
  /**
   * @var string
   */
  public $projectDisplayName;
  /**
   * @var string
   */
  public $projectName;
  protected $resourcePathType = ResourcePath::class;
  protected $resourcePathDataType = '';
  /**
   * @var string
   */
  public $resourcePathString;
  /**
   * @var string
   */
  public $service;
  /**
   * @var string
   */
  public $type;

  /**
   * @param AdcApplication $adcApplication
   */
  public function setAdcApplication(AdcApplication $adcApplication)
  {
    $this->adcApplication = $adcApplication;
  }
  /**
   * @return AdcApplication
   */
  public function getAdcApplication()
  {
    return $this->adcApplication;
  }
  /**
   * @param AdcApplicationTemplateRevision $adcApplicationTemplate
   */
  public function setAdcApplicationTemplate(AdcApplicationTemplateRevision $adcApplicationTemplate)
  {
    $this->adcApplicationTemplate = $adcApplicationTemplate;
  }
  /**
   * @return AdcApplicationTemplateRevision
   */
  public function getAdcApplicationTemplate()
  {
    return $this->adcApplicationTemplate;
  }
  /**
   * @param AdcSharedTemplateRevision $adcSharedTemplate
   */
  public function setAdcSharedTemplate(AdcSharedTemplateRevision $adcSharedTemplate)
  {
    $this->adcSharedTemplate = $adcSharedTemplate;
  }
  /**
   * @return AdcSharedTemplateRevision
   */
  public function getAdcSharedTemplate()
  {
    return $this->adcSharedTemplate;
  }
  /**
   * @param GoogleCloudSecuritycenterV1ResourceApplication $application
   */
  public function setApplication(GoogleCloudSecuritycenterV1ResourceApplication $application)
  {
    $this->application = $application;
  }
  /**
   * @return GoogleCloudSecuritycenterV1ResourceApplication
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param AwsMetadata $awsMetadata
   */
  public function setAwsMetadata(AwsMetadata $awsMetadata)
  {
    $this->awsMetadata = $awsMetadata;
  }
  /**
   * @return AwsMetadata
   */
  public function getAwsMetadata()
  {
    return $this->awsMetadata;
  }
  /**
   * @param AzureMetadata $azureMetadata
   */
  public function setAzureMetadata(AzureMetadata $azureMetadata)
  {
    $this->azureMetadata = $azureMetadata;
  }
  /**
   * @return AzureMetadata
   */
  public function getAzureMetadata()
  {
    return $this->azureMetadata;
  }
  /**
   * @param self::CLOUD_PROVIDER_* $cloudProvider
   */
  public function setCloudProvider($cloudProvider)
  {
    $this->cloudProvider = $cloudProvider;
  }
  /**
   * @return self::CLOUD_PROVIDER_*
   */
  public function getCloudProvider()
  {
    return $this->cloudProvider;
  }
  /**
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param Folder[] $folders
   */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /**
   * @return Folder[]
   */
  public function getFolders()
  {
    return $this->folders;
  }
  /**
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string $organization
   */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /**
   * @return string
   */
  public function getOrganization()
  {
    return $this->organization;
  }
  /**
   * @param string $parentDisplayName
   */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /**
   * @return string
   */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /**
   * @param string $parentName
   */
  public function setParentName($parentName)
  {
    $this->parentName = $parentName;
  }
  /**
   * @return string
   */
  public function getParentName()
  {
    return $this->parentName;
  }
  /**
   * @param string $projectDisplayName
   */
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  /**
   * @return string
   */
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
  }
  /**
   * @param string $projectName
   */
  public function setProjectName($projectName)
  {
    $this->projectName = $projectName;
  }
  /**
   * @return string
   */
  public function getProjectName()
  {
    return $this->projectName;
  }
  /**
   * @param ResourcePath $resourcePath
   */
  public function setResourcePath(ResourcePath $resourcePath)
  {
    $this->resourcePath = $resourcePath;
  }
  /**
   * @return ResourcePath
   */
  public function getResourcePath()
  {
    return $this->resourcePath;
  }
  /**
   * @param string $resourcePathString
   */
  public function setResourcePathString($resourcePathString)
  {
    $this->resourcePathString = $resourcePathString;
  }
  /**
   * @return string
   */
  public function getResourcePathString()
  {
    return $this->resourcePathString;
  }
  /**
   * @param string $service
   */
  public function setService($service)
  {
    $this->service = $service;
  }
  /**
   * @return string
   */
  public function getService()
  {
    return $this->service;
  }
  /**
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecuritycenterResource::class, 'Google_Service_SecurityCommandCenter_SecuritycenterResource');
