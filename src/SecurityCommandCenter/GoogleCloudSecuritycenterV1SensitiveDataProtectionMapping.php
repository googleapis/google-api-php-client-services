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

class GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping extends \Google\Model
{
  public const HIGH_SENSITIVITY_MAPPING_RESOURCE_VALUE_UNSPECIFIED = 'RESOURCE_VALUE_UNSPECIFIED';
  public const HIGH_SENSITIVITY_MAPPING_HIGH = 'HIGH';
  public const HIGH_SENSITIVITY_MAPPING_MEDIUM = 'MEDIUM';
  public const HIGH_SENSITIVITY_MAPPING_LOW = 'LOW';
  public const HIGH_SENSITIVITY_MAPPING_NONE = 'NONE';
  public const MEDIUM_SENSITIVITY_MAPPING_RESOURCE_VALUE_UNSPECIFIED = 'RESOURCE_VALUE_UNSPECIFIED';
  public const MEDIUM_SENSITIVITY_MAPPING_HIGH = 'HIGH';
  public const MEDIUM_SENSITIVITY_MAPPING_MEDIUM = 'MEDIUM';
  public const MEDIUM_SENSITIVITY_MAPPING_LOW = 'LOW';
  public const MEDIUM_SENSITIVITY_MAPPING_NONE = 'NONE';
  /**
   * @var string
   */
  public $highSensitivityMapping;
  /**
   * @var string
   */
  public $mediumSensitivityMapping;

  /**
   * @param self::HIGH_SENSITIVITY_MAPPING_* $highSensitivityMapping
   */
  public function setHighSensitivityMapping($highSensitivityMapping)
  {
    $this->highSensitivityMapping = $highSensitivityMapping;
  }
  /**
   * @return self::HIGH_SENSITIVITY_MAPPING_*
   */
  public function getHighSensitivityMapping()
  {
    return $this->highSensitivityMapping;
  }
  /**
   * @param self::MEDIUM_SENSITIVITY_MAPPING_* $mediumSensitivityMapping
   */
  public function setMediumSensitivityMapping($mediumSensitivityMapping)
  {
    $this->mediumSensitivityMapping = $mediumSensitivityMapping;
  }
  /**
   * @return self::MEDIUM_SENSITIVITY_MAPPING_*
   */
  public function getMediumSensitivityMapping()
  {
    return $this->mediumSensitivityMapping;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1SensitiveDataProtectionMapping');
