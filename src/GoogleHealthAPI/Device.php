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

namespace Google\Service\GoogleHealthAPI;

class Device extends \Google\Model
{
  /**
   * The form factor is unspecified.
   */
  public const FORM_FACTOR_FORM_FACTOR_UNSPECIFIED = 'FORM_FACTOR_UNSPECIFIED';
  /**
   * The device is a fitness band.
   */
  public const FORM_FACTOR_FITNESS_BAND = 'FITNESS_BAND';
  /**
   * The device is a watch.
   */
  public const FORM_FACTOR_WATCH = 'WATCH';
  /**
   * The device is a phone.
   */
  public const FORM_FACTOR_PHONE = 'PHONE';
  /**
   * The device is a ring.
   */
  public const FORM_FACTOR_RING = 'RING';
  /**
   * The device is a chest strap.
   */
  public const FORM_FACTOR_CHEST_STRAP = 'CHEST_STRAP';
  /**
   * The device is a scale.
   */
  public const FORM_FACTOR_SCALE = 'SCALE';
  /**
   * The device is a tablet.
   */
  public const FORM_FACTOR_TABLET = 'TABLET';
  /**
   * The device is a head mounted device.
   */
  public const FORM_FACTOR_HEAD_MOUNTED = 'HEAD_MOUNTED';
  /**
   * The device is a smart display.
   */
  public const FORM_FACTOR_SMART_DISPLAY = 'SMART_DISPLAY';
  /**
   * Optional. An optional name for the device.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Captures the form factor of the device.
   *
   * @var string
   */
  public $formFactor;
  /**
   * Optional. An optional manufacturer of the device.
   *
   * @var string
   */
  public $manufacturer;

  /**
   * Optional. An optional name for the device.
   *
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
   * Optional. Captures the form factor of the device.
   *
   * Accepted values: FORM_FACTOR_UNSPECIFIED, FITNESS_BAND, WATCH, PHONE, RING,
   * CHEST_STRAP, SCALE, TABLET, HEAD_MOUNTED, SMART_DISPLAY
   *
   * @param self::FORM_FACTOR_* $formFactor
   */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /**
   * @return self::FORM_FACTOR_*
   */
  public function getFormFactor()
  {
    return $this->formFactor;
  }
  /**
   * Optional. An optional manufacturer of the device.
   *
   * @param string $manufacturer
   */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /**
   * @return string
   */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Device::class, 'Google_Service_GoogleHealthAPI_Device');
