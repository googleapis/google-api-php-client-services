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

namespace Google\Service\DataManager;

class AdIdentifiers extends \Google\Model
{
  /**
   * @var string
   */
  public $gbraid;
  /**
   * @var string
   */
  public $gclid;
  protected $landingPageDeviceInfoType = DeviceInfo::class;
  protected $landingPageDeviceInfoDataType = '';
  /**
   * @var string
   */
  public $sessionAttributes;
  /**
   * @var string
   */
  public $wbraid;

  /**
   * @param string
   */
  public function setGbraid($gbraid)
  {
    $this->gbraid = $gbraid;
  }
  /**
   * @return string
   */
  public function getGbraid()
  {
    return $this->gbraid;
  }
  /**
   * @param string
   */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /**
   * @return string
   */
  public function getGclid()
  {
    return $this->gclid;
  }
  /**
   * @param DeviceInfo
   */
  public function setLandingPageDeviceInfo(DeviceInfo $landingPageDeviceInfo)
  {
    $this->landingPageDeviceInfo = $landingPageDeviceInfo;
  }
  /**
   * @return DeviceInfo
   */
  public function getLandingPageDeviceInfo()
  {
    return $this->landingPageDeviceInfo;
  }
  /**
   * @param string
   */
  public function setSessionAttributes($sessionAttributes)
  {
    $this->sessionAttributes = $sessionAttributes;
  }
  /**
   * @return string
   */
  public function getSessionAttributes()
  {
    return $this->sessionAttributes;
  }
  /**
   * @param string
   */
  public function setWbraid($wbraid)
  {
    $this->wbraid = $wbraid;
  }
  /**
   * @return string
   */
  public function getWbraid()
  {
    return $this->wbraid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdIdentifiers::class, 'Google_Service_DataManager_AdIdentifiers');
