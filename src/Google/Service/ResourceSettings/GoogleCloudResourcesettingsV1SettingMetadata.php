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

class Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1SettingMetadata extends Google_Model
{
  public $dataType;
  protected $defaultValueType = 'Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value';
  protected $defaultValueDataType = '';
  public $description;
  public $displayName;
  public $readOnly;

  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  public function getDataType()
  {
    return $this->dataType;
  }
  /**
   * @param Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function setDefaultValue(Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /**
   * @return Google_Service_ResourceSettings_GoogleCloudResourcesettingsV1Value
   */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  public function getReadOnly()
  {
    return $this->readOnly;
  }
}
