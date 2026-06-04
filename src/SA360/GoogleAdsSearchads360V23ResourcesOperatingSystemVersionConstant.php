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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant extends \Google\Model
{
  /**
   * Not specified.
   */
  public const OPERATOR_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OPERATOR_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Equals to the specified version.
   */
  public const OPERATOR_TYPE_EQUALS_TO = 'EQUALS_TO';
  /**
   * Greater than or equals to the specified version.
   */
  public const OPERATOR_TYPE_GREATER_THAN_EQUALS_TO = 'GREATER_THAN_EQUALS_TO';
  /**
   * Output only. The ID of the operating system version.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Name of the operating system.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Determines whether this constant represents a single version
   * or a range of versions.
   *
   * @var string
   */
  public $operatorType;
  /**
   * Output only. The OS Major Version number.
   *
   * @var int
   */
  public $osMajorVersion;
  /**
   * Output only. The OS Minor Version number.
   *
   * @var int
   */
  public $osMinorVersion;
  /**
   * Output only. The resource name of the operating system version constant.
   * Operating system version constant resource names have the form:
   * `operatingSystemVersionConstants/{criterion_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The ID of the operating system version.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. Name of the operating system.
   *
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
   * Output only. Determines whether this constant represents a single version
   * or a range of versions.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EQUALS_TO, GREATER_THAN_EQUALS_TO
   *
   * @param self::OPERATOR_TYPE_* $operatorType
   */
  public function setOperatorType($operatorType)
  {
    $this->operatorType = $operatorType;
  }
  /**
   * @return self::OPERATOR_TYPE_*
   */
  public function getOperatorType()
  {
    return $this->operatorType;
  }
  /**
   * Output only. The OS Major Version number.
   *
   * @param int $osMajorVersion
   */
  public function setOsMajorVersion($osMajorVersion)
  {
    $this->osMajorVersion = $osMajorVersion;
  }
  /**
   * @return int
   */
  public function getOsMajorVersion()
  {
    return $this->osMajorVersion;
  }
  /**
   * Output only. The OS Minor Version number.
   *
   * @param int $osMinorVersion
   */
  public function setOsMinorVersion($osMinorVersion)
  {
    $this->osMinorVersion = $osMinorVersion;
  }
  /**
   * @return int
   */
  public function getOsMinorVersion()
  {
    return $this->osMinorVersion;
  }
  /**
   * Output only. The resource name of the operating system version constant.
   * Operating system version constant resource names have the form:
   * `operatingSystemVersionConstants/{criterion_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant');
