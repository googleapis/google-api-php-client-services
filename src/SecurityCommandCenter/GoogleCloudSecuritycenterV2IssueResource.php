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

class GoogleCloudSecuritycenterV2IssueResource extends \Google\Model
{
  public const CLOUD_PROVIDER_CLOUD_PROVIDER_UNSPECIFIED = 'CLOUD_PROVIDER_UNSPECIFIED';
  public const CLOUD_PROVIDER_GOOGLE_CLOUD = 'GOOGLE_CLOUD';
  public const CLOUD_PROVIDER_AMAZON_WEB_SERVICES = 'AMAZON_WEB_SERVICES';
  public const CLOUD_PROVIDER_MICROSOFT_AZURE = 'MICROSOFT_AZURE';
  protected $adcApplicationType = GoogleCloudSecuritycenterV2IssueResourceAdcApplication::class;
  protected $adcApplicationDataType = '';
  protected $adcApplicationTemplateType = GoogleCloudSecuritycenterV2IssueResourceAdcApplicationTemplateRevision::class;
  protected $adcApplicationTemplateDataType = '';
  protected $adcSharedTemplateType = GoogleCloudSecuritycenterV2IssueResourceAdcSharedTemplateRevision::class;
  protected $adcSharedTemplateDataType = '';
  protected $applicationType = GoogleCloudSecuritycenterV2IssueResourceApplication::class;
  protected $applicationDataType = '';
  protected $awsMetadataType = GoogleCloudSecuritycenterV2IssueResourceAwsMetadata::class;
  protected $awsMetadataDataType = '';
  protected $azureMetadataType = GoogleCloudSecuritycenterV2IssueResourceAzureMetadata::class;
  protected $azureMetadataDataType = '';
  /**
   * @var string
   */
  public $cloudProvider;
  /**
   * @var string
   */
  public $displayName;
  protected $googleCloudMetadataType = GoogleCloudSecuritycenterV2IssueResourceGoogleCloudMetadata::class;
  protected $googleCloudMetadataDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $type;

  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceAdcApplication $adcApplication
   */
  public function setAdcApplication(GoogleCloudSecuritycenterV2IssueResourceAdcApplication $adcApplication)
  {
    $this->adcApplication = $adcApplication;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceAdcApplication
   */
  public function getAdcApplication()
  {
    return $this->adcApplication;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceAdcApplicationTemplateRevision $adcApplicationTemplate
   */
  public function setAdcApplicationTemplate(GoogleCloudSecuritycenterV2IssueResourceAdcApplicationTemplateRevision $adcApplicationTemplate)
  {
    $this->adcApplicationTemplate = $adcApplicationTemplate;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceAdcApplicationTemplateRevision
   */
  public function getAdcApplicationTemplate()
  {
    return $this->adcApplicationTemplate;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceAdcSharedTemplateRevision $adcSharedTemplate
   */
  public function setAdcSharedTemplate(GoogleCloudSecuritycenterV2IssueResourceAdcSharedTemplateRevision $adcSharedTemplate)
  {
    $this->adcSharedTemplate = $adcSharedTemplate;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceAdcSharedTemplateRevision
   */
  public function getAdcSharedTemplate()
  {
    return $this->adcSharedTemplate;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceApplication $application
   */
  public function setApplication(GoogleCloudSecuritycenterV2IssueResourceApplication $application)
  {
    $this->application = $application;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceApplication
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceAwsMetadata $awsMetadata
   */
  public function setAwsMetadata(GoogleCloudSecuritycenterV2IssueResourceAwsMetadata $awsMetadata)
  {
    $this->awsMetadata = $awsMetadata;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceAwsMetadata
   */
  public function getAwsMetadata()
  {
    return $this->awsMetadata;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResourceAzureMetadata $azureMetadata
   */
  public function setAzureMetadata(GoogleCloudSecuritycenterV2IssueResourceAzureMetadata $azureMetadata)
  {
    $this->azureMetadata = $azureMetadata;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceAzureMetadata
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
   * @param GoogleCloudSecuritycenterV2IssueResourceGoogleCloudMetadata $googleCloudMetadata
   */
  public function setGoogleCloudMetadata(GoogleCloudSecuritycenterV2IssueResourceGoogleCloudMetadata $googleCloudMetadata)
  {
    $this->googleCloudMetadata = $googleCloudMetadata;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResourceGoogleCloudMetadata
   */
  public function getGoogleCloudMetadata()
  {
    return $this->googleCloudMetadata;
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
class_alias(GoogleCloudSecuritycenterV2IssueResource::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2IssueResource');
