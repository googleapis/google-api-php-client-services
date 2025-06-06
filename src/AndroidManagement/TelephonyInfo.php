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

namespace Google\Service\AndroidManagement;

class TelephonyInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $activationState;
  /**
   * @var string
   */
  public $carrierName;
  /**
   * @var string
   */
  public $configMode;
  /**
   * @var string
   */
  public $iccId;
  /**
   * @var string
   */
  public $phoneNumber;

  /**
   * @param string
   */
  public function setActivationState($activationState)
  {
    $this->activationState = $activationState;
  }
  /**
   * @return string
   */
  public function getActivationState()
  {
    return $this->activationState;
  }
  /**
   * @param string
   */
  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }
  /**
   * @return string
   */
  public function getCarrierName()
  {
    return $this->carrierName;
  }
  /**
   * @param string
   */
  public function setConfigMode($configMode)
  {
    $this->configMode = $configMode;
  }
  /**
   * @return string
   */
  public function getConfigMode()
  {
    return $this->configMode;
  }
  /**
   * @param string
   */
  public function setIccId($iccId)
  {
    $this->iccId = $iccId;
  }
  /**
   * @return string
   */
  public function getIccId()
  {
    return $this->iccId;
  }
  /**
   * @param string
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TelephonyInfo::class, 'Google_Service_AndroidManagement_TelephonyInfo');
