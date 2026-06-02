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

class GoogleCloudSecuritycenterV2Resource extends \Google\Model
{
  public const CLOUD_PROVIDER_CLOUD_PROVIDER_UNSPECIFIED = 'CLOUD_PROVIDER_UNSPECIFIED';
  public const CLOUD_PROVIDER_GOOGLE_CLOUD_PLATFORM = 'GOOGLE_CLOUD_PLATFORM';
  public const CLOUD_PROVIDER_AMAZON_WEB_SERVICES = 'AMAZON_WEB_SERVICES';
  public const CLOUD_PROVIDER_MICROSOFT_AZURE = 'MICROSOFT_AZURE';
  protected $adcApplicationType = GoogleCloudSecuritycenterV2AdcApplication::class;
  protected $adcApplicationDataType = '';
  protected $adcApplicationTemplateType = GoogleCloudSecuritycenterV2AdcApplicationTemplateRevision::class;
  protected $adcApplicationTemplateDataType = '';
  protected $adcSharedTemplateType = GoogleCloudSecuritycenterV2AdcSharedTemplateRevision::class;
  protected $adcSharedTemplateDataType = '';
  protected $applicationType = GoogleCloudSecuritycenterV2ResourceApplication::class;
  protected $applicationDataType = '';
  protected $awsMetadataType = GoogleCloudSecuritycenterV2AwsMetadata::class;
  protected $awsMetadataDataType = '';
  protected $azureMetadataType = GoogleCloudSecuritycenterV2AzureMetadata::class;
  protected $azureMetadataDataType = '';
  /**
   * @var string
   */
  public $cloudProvider;
  /**
   * @var string
   */
  public $displayName;
  protected $gcpMetadataType = GcpMetadata::class;
  protected $gcpMetadataDataType = '';
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $name;
  protected $resourcePathType = GoogleCloudSecuritycenterV2ResourcePath::class;
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
   * @param GoogleCloudSecuritycenterV2AdcApplication $adcApplication
   */
  public function setAdcApplication(GoogleCloudSecuritycenterV2AdcApplication $adcApplication)
  {
    $this->adcApplication = $adcApplication;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AdcApplication
   */
  public function getAdcApplication()
  {
    return $this->adcApplication;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AdcApplicationTemplateRevision $adcApplicationTemplate
   */
  public function setAdcApplicationTemplate(GoogleCloudSecuritycenterV2AdcApplicationTemplateRevision $adcApplicationTemplate)
  {
    $this->adcApplicationTemplate = $adcApplicationTemplate;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AdcApplicationTemplateRevision
   */
  public function getAdcApplicationTemplate()
  {
    return $this->adcApplicationTemplate;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AdcSharedTemplateRevision $adcSharedTemplate
   */
  public function setAdcSharedTemplate(GoogleCloudSecuritycenterV2AdcSharedTemplateRevision $adcSharedTemplate)
  {
    $this->adcSharedTemplate = $adcSharedTemplate;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AdcSharedTemplateRevision
   */
  public function getAdcSharedTemplate()
  {
    return $this->adcSharedTemplate;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ResourceApplication $application
   */
  public function setApplication(GoogleCloudSecuritycenterV2ResourceApplication $application)
  {
    $this->application = $application;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ResourceApplication
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AwsMetadata $awsMetadata
   */
  public function setAwsMetadata(GoogleCloudSecuritycenterV2AwsMetadata $awsMetadata)
  {
    $this->awsMetadata = $awsMetadata;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AwsMetadata
   */
  public function getAwsMetadata()
  {
    return $this->awsMetadata;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AzureMetadata $azureMetadata
   */
  public function setAzureMetadata(GoogleCloudSecuritycenterV2AzureMetadata $azureMetadata)
  {
    $this->azureMetadata = $azureMetadata;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AzureMetadata
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
   * @param GcpMetadata $gcpMetadata
   */
  public function setGcpMetadata(GcpMetadata $gcpMetadata)
  {
    $this->gcpMetadata = $gcpMetadata;
  }
  /**
   * @return GcpMetadata
   */
  public function getGcpMetadata()
  {
    return $this->gcpMetadata;
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
   * @param GoogleCloudSecuritycenterV2ResourcePath $resourcePath
   */
  public function setResourcePath(GoogleCloudSecuritycenterV2ResourcePath $resourcePath)
  {
    $this->resourcePath = $resourcePath;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ResourcePath
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
class_alias(GoogleCloudSecuritycenterV2Resource::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Resource');
