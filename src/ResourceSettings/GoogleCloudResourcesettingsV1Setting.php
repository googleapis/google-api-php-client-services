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

class Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Setting extends Google_Model
{
  protected $effectiveValueType = 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value';
  protected $effectiveValueDataType = '';
  public $etag;
  protected $localValueType = 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value';
  protected $localValueDataType = '';
  protected $metadataType = 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata';
  protected $metadataDataType = '';
  public $name;

  /**
   * @param Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function setEffectiveValue(Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value $effectiveValue)
  {
    $this->effectiveValue = $effectiveValue;
  }
  /**
   * @return Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function getEffectiveValue()
  {
    return $this->effectiveValue;
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
   * @param Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function setLocalValue(Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value $localValue)
  {
    $this->localValue = $localValue;
  }
  /**
   * @return Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function getLocalValue()
  {
    return $this->localValue;
  }
  /**
   * @param Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata
   */
  public function setMetadata(Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
