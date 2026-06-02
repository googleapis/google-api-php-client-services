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

class GoogleCloudSecuritycenterV1ResourceValueConfig extends \Google\Collection
{
  public const CLOUD_PROVIDER_CLOUD_PROVIDER_UNSPECIFIED = 'CLOUD_PROVIDER_UNSPECIFIED';
  public const CLOUD_PROVIDER_GOOGLE_CLOUD_PLATFORM = 'GOOGLE_CLOUD_PLATFORM';
  public const CLOUD_PROVIDER_AMAZON_WEB_SERVICES = 'AMAZON_WEB_SERVICES';
  public const CLOUD_PROVIDER_MICROSOFT_AZURE = 'MICROSOFT_AZURE';
  public const RESOURCE_VALUE_RESOURCE_VALUE_UNSPECIFIED = 'RESOURCE_VALUE_UNSPECIFIED';
  public const RESOURCE_VALUE_HIGH = 'HIGH';
  public const RESOURCE_VALUE_MEDIUM = 'MEDIUM';
  public const RESOURCE_VALUE_LOW = 'LOW';
  public const RESOURCE_VALUE_NONE = 'NONE';
  protected $collection_key = 'tagValues';
  /**
   * @var string
   */
  public $cloudProvider;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string[]
   */
  public $resourceLabelsSelector;
  /**
   * @var string
   */
  public $resourceType;
  /**
   * @var string
   */
  public $resourceValue;
  /**
   * @var string
   */
  public $scope;
  protected $sensitiveDataProtectionMappingType = GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping::class;
  protected $sensitiveDataProtectionMappingDataType = '';
  /**
   * @var string[]
   */
  public $tagValues;
  /**
   * @var string
   */
  public $updateTime;

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
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
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
   * @param string[] $resourceLabelsSelector
   */
  public function setResourceLabelsSelector($resourceLabelsSelector)
  {
    $this->resourceLabelsSelector = $resourceLabelsSelector;
  }
  /**
   * @return string[]
   */
  public function getResourceLabelsSelector()
  {
    return $this->resourceLabelsSelector;
  }
  /**
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * @param self::RESOURCE_VALUE_* $resourceValue
   */
  public function setResourceValue($resourceValue)
  {
    $this->resourceValue = $resourceValue;
  }
  /**
   * @return self::RESOURCE_VALUE_*
   */
  public function getResourceValue()
  {
    return $this->resourceValue;
  }
  /**
   * @param string $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * @param GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping $sensitiveDataProtectionMapping
   */
  public function setSensitiveDataProtectionMapping(GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping $sensitiveDataProtectionMapping)
  {
    $this->sensitiveDataProtectionMapping = $sensitiveDataProtectionMapping;
  }
  /**
   * @return GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping
   */
  public function getSensitiveDataProtectionMapping()
  {
    return $this->sensitiveDataProtectionMapping;
  }
  /**
   * @param string[] $tagValues
   */
  public function setTagValues($tagValues)
  {
    $this->tagValues = $tagValues;
  }
  /**
   * @return string[]
   */
  public function getTagValues()
  {
    return $this->tagValues;
  }
  /**
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV1ResourceValueConfig::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ResourceValueConfig');
