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

class GoogleAdsSearchads360V23ResourcesMobileDeviceConstant extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Mobile phones.
   */
  public const TYPE_MOBILE = 'MOBILE';
  /**
   * Tablets.
   */
  public const TYPE_TABLET = 'TABLET';
  /**
   * Output only. The ID of the mobile device constant.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The manufacturer of the mobile device.
   *
   * @var string
   */
  public $manufacturerName;
  /**
   * Output only. The name of the mobile device.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The operating system of the mobile device.
   *
   * @var string
   */
  public $operatingSystemName;
  /**
   * Output only. The resource name of the mobile device constant. Mobile device
   * constant resource names have the form:
   * `mobileDeviceConstants/{criterion_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The type of mobile device.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The ID of the mobile device constant.
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
   * Output only. The manufacturer of the mobile device.
   *
   * @param string $manufacturerName
   */
  public function setManufacturerName($manufacturerName)
  {
    $this->manufacturerName = $manufacturerName;
  }
  /**
   * @return string
   */
  public function getManufacturerName()
  {
    return $this->manufacturerName;
  }
  /**
   * Output only. The name of the mobile device.
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
   * Output only. The operating system of the mobile device.
   *
   * @param string $operatingSystemName
   */
  public function setOperatingSystemName($operatingSystemName)
  {
    $this->operatingSystemName = $operatingSystemName;
  }
  /**
   * @return string
   */
  public function getOperatingSystemName()
  {
    return $this->operatingSystemName;
  }
  /**
   * Output only. The resource name of the mobile device constant. Mobile device
   * constant resource names have the form:
   * `mobileDeviceConstants/{criterion_id}`
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
  /**
   * Output only. The type of mobile device.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MOBILE, TABLET
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMobileDeviceConstant::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMobileDeviceConstant');
