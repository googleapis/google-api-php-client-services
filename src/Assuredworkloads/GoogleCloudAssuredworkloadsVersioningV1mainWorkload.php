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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsVersioningV1mainWorkload extends \Google\Collection
{
  protected $collection_key = 'resources';
  public $billingAccount;
  protected $cjisSettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadCJISSettings::class;
  protected $cjisSettingsDataType = '';
  public $complianceRegime;
  public $createTime;
  public $displayName;
  public $etag;
  protected $fedrampHighSettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampHighSettings::class;
  protected $fedrampHighSettingsDataType = '';
  protected $fedrampModerateSettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampModerateSettings::class;
  protected $fedrampModerateSettingsDataType = '';
  protected $il4SettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadIL4Settings::class;
  protected $il4SettingsDataType = '';
  protected $kmsSettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadKMSSettings::class;
  protected $kmsSettingsDataType = '';
  public $labels;
  public $name;
  public $provisionedResourcesParent;
  protected $resourceSettingsType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceSettings::class;
  protected $resourceSettingsDataType = 'array';
  protected $resourcesType = GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceInfo::class;
  protected $resourcesDataType = 'array';

  public function setBillingAccount($billingAccount)
  {
    $this->billingAccount = $billingAccount;
  }
  public function getBillingAccount()
  {
    return $this->billingAccount;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadCJISSettings
   */
  public function setCjisSettings(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadCJISSettings $cjisSettings)
  {
    $this->cjisSettings = $cjisSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadCJISSettings
   */
  public function getCjisSettings()
  {
    return $this->cjisSettings;
  }
  public function setComplianceRegime($complianceRegime)
  {
    $this->complianceRegime = $complianceRegime;
  }
  public function getComplianceRegime()
  {
    return $this->complianceRegime;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampHighSettings
   */
  public function setFedrampHighSettings(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampHighSettings $fedrampHighSettings)
  {
    $this->fedrampHighSettings = $fedrampHighSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampHighSettings
   */
  public function getFedrampHighSettings()
  {
    return $this->fedrampHighSettings;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampModerateSettings
   */
  public function setFedrampModerateSettings(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampModerateSettings $fedrampModerateSettings)
  {
    $this->fedrampModerateSettings = $fedrampModerateSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadFedrampModerateSettings
   */
  public function getFedrampModerateSettings()
  {
    return $this->fedrampModerateSettings;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadIL4Settings
   */
  public function setIl4Settings(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadIL4Settings $il4Settings)
  {
    $this->il4Settings = $il4Settings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadIL4Settings
   */
  public function getIl4Settings()
  {
    return $this->il4Settings;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadKMSSettings
   */
  public function setKmsSettings(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadKMSSettings $kmsSettings)
  {
    $this->kmsSettings = $kmsSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadKMSSettings
   */
  public function getKmsSettings()
  {
    return $this->kmsSettings;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProvisionedResourcesParent($provisionedResourcesParent)
  {
    $this->provisionedResourcesParent = $provisionedResourcesParent;
  }
  public function getProvisionedResourcesParent()
  {
    return $this->provisionedResourcesParent;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceSettings[]
   */
  public function setResourceSettings($resourceSettings)
  {
    $this->resourceSettings = $resourceSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceSettings[]
   */
  public function getResourceSettings()
  {
    return $this->resourceSettings;
  }
  /**
   * @param GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceInfo[]
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return GoogleCloudAssuredworkloadsVersioningV1mainWorkloadResourceInfo[]
   */
  public function getResources()
  {
    return $this->resources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsVersioningV1mainWorkload::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsVersioningV1mainWorkload');
