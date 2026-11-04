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

class DeviceWideRadioState extends \Google\Model
{
  /**
   * Unspecified. Defaults to NFC_USER_CHOICE.
   */
  public const NFC_NFC_UNSPECIFIED = 'NFC_UNSPECIFIED';
  /**
   * The user is allowed to toggle NFC between enabled and disabled. A
   * NonComplianceDetail with API_LEVEL is reported if the Android version is
   * less than 15.
   */
  public const NFC_NFC_USER_CHOICE = 'NFC_USER_CHOICE';
  /**
   * NFC is disabled on the device. The user is not allowed to toggle NFC on.
   * This is supported on fully managed devices and work profiles on company-
   * owned devices. For other management modes, a NonComplianceDetail with
   * MANAGEMENT_MODE is reported. A NonComplianceDetail with API_LEVEL is
   * reported if the Android version is less than 15.
   */
  public const NFC_NFC_DISABLED = 'NFC_DISABLED';
  /**
   * Optional. Controls whether NFC is disabled on the device and if the user
   * can toggle NFC between enabled and disabled. This is for work profiles on
   * company-owned devices. To control NFC on fully managed devices, use
   * deviceRadioState.nfc instead.
   *
   * @var string
   */
  public $nfc;

  /**
   * Optional. Controls whether NFC is disabled on the device and if the user
   * can toggle NFC between enabled and disabled. This is for work profiles on
   * company-owned devices. To control NFC on fully managed devices, use
   * deviceRadioState.nfc instead.
   *
   * Accepted values: NFC_UNSPECIFIED, NFC_USER_CHOICE, NFC_DISABLED
   *
   * @param self::NFC_* $nfc
   */
  public function setNfc($nfc)
  {
    $this->nfc = $nfc;
  }
  /**
   * @return self::NFC_*
   */
  public function getNfc()
  {
    return $this->nfc;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceWideRadioState::class, 'Google_Service_AndroidManagement_DeviceWideRadioState');
